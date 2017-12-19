<?php

namespace App\Admin\Controllers;

use App\Admin\Extensions\ExcelExporter;
use App\Admin\Extensions\Tools\ReleasePost;
use App\Admin\Extensions\Tools\RestorePost;
use App\Admin\Extensions\Tools\ShowSelected;
use App\Admin\Extensions\Tools\Trashed;
use App\Models\Dept;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use ModelForm;

    /**
     * Index interface.
     *
     * @return Content
     */
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('统计头条');
            $content->description('列表');

            $content->body($this->grid());
        });
    }

    /**
     * Edit interface.
     *
     * @param $id
     * @return Content
     */
    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('头条');
            $content->description('编辑');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('头条');
            $content->description('新建');

            $content->body($this->form());
        });
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Admin::grid(Post::class, function (Grid $grid) {

            if (request('trashed') == 1) {
                $grid->model()->onlyTrashed();
            }

            $grid->id('ID')->sortable();

            $grid->column('title','标题')->ucfirst()->limit(50)->sortable();

            $grid->tags('标签')->pluck('name')->label();
            $states = [
                'on'  => ['value' => 1, 'text' => '是'],
                'off' => ['value' => 0, 'text' => '否'],
            ];
            $grid->column('released','发布')->switch($states);


            $grid->rate('等级')->display(function ($rate) {
                $html = "<i class='fa fa-star' style='color:#ff8913'></i>";

                return join('&nbsp;', array_fill(0, min(5, $rate), $html));
            });

            $grid->created_at('创建时间')->sortable()->editable('datetime');

//            $grid->column('float_bar')->floatBar();

//            $grid->rows(function (Grid\Row $row) {
//                if ($row->id % 2) {
//                    $row->setAttributes(['style' => 'color:red;']);
//                }
//            });

            $grid->filter(function (Grid\Filter $filter) {

                $filter->equal('title','标题');

                $filter->equal('created_at','创建时间')->datetime();

                $filter->between('updated_at','更新时间')->datetime();

                $filter->between('rate','等级');

                $filter->where(function ($query) {

                    $input = $this->input;

                    $query->whereHas('tags', function ($query) use ($input) {
                        $query->where('name', $input);
                    });

                }, '标签', 'tag');
            });

            $grid->tools(function ($tools) {

                $tools->append(new Trashed());

                $tools->batch(function (Grid\Tools\BatchActions $batch) {

                    $batch->add('恢复', new RestorePost());
                    $batch->add('发布', new ReleasePost(1));
                    $batch->add('取消发布', new ReleasePost(0));
                    $batch->add('显示选中项', new ShowSelected());
                });

            });

            $grid->exporter(new ExcelExporter());
        });
    }



    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Post::class, function (Form $form) {

            $form->display('id', 'ID');

            $form->text('title','标题')->rules('required|min:1');

            $form->select('author_id','发布部门')->options(function ($id) {
                $user = Dept::find($id);
                if ($user) {
                    return [$user->id => $user->name];
                }
            })->ajax('/admin/api/users')->rules('required|min:1');
            $form->file('images','封面')->removable();
            $form->file('files','附件')->removable();
            $form->editor('content','内容');
            $form->listbox('tags','标签')->options(Tag::all()->pluck('name', 'id'))->settings(['selectorMinimalHeight' => 300]);

            $form->number('rate','评分');

            $form->radio('released','发布')->options(['1' => '发布', '0'=> '不发布'])->default('1');


            $form->datetime('release_at', '发布时间')->default(now());
            $form->display('created_at', '创建时间')->default(now());
            $form->display('updated_at', '更新时间')->default(now());
        });
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function users(Request $request)
    {
        $q = $request->get('q');

        return Dept::where('name', 'like', "%$q%")->paginate(null, ['id', 'name as text']);
    }

    public function release(Request $request)
    {
        foreach (Post::find($request->get('ids')) as $post) {
            $post->released = $request->get('action');
            $post->save();
        }
    }

    public function restore(Request $request)
    {
        return Post::onlyTrashed()->find($request->get('ids'))->each->restore();
    }
}
