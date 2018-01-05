<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Form;
use Encore\Admin\Grid;

class ProjectController extends Controller
{
    use ModelForm;
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('重点项目监测');
            $content->description(now());

            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.project-monitor.p-table'));
//                $row->column(5, view('admin.charts.project-monitor.p-img'));
            });
//            $content->body(view('admin.charts.project-monitor.p-list'));
            $content->body($this->grid());
        });
    }
    public function show()
    {
        return Admin::content(function (Content $content) {

            $content->header('重点项目监测');
            $content->description(now());

            //$content->body(view('admin.charts.industry-monitor.616.dateline'));
            $content->body(view('admin.charts.project-monitor.p-content'));

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
            $content->header('重点项目更新');
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

            $content->header('新建项目');
            $content->description('description');

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
        return Admin::grid(Project::class, function (Grid $grid) {

            $grid->id('ID')->sortable();
            $grid->title('项目名称')->sortable();
            $grid->Responsible_unit('负责单位')->sortable();
            $grid->Address('地址')->sortable();
            $grid->T_investment('总投资')->sortable();
            $grid->C_investment('累计完成投资')->sortable();
            $grid->Speed('完成进度')->sortable()->editable();
            $grid->S_at('开工日期')->sortable();
//            $grid->updated_at('更新日期')->sortable();

            $grid->filter(function (Grid\Filter $filter) {
                $filter->like('title','项目名称');
                $filter->like('Responsible_unit','负责单位');
                $filter->like('Address','项目地址');
                $filter->like('T_investment','总投资');
                $filter->like('C_investment','累计完成投资');
                $filter->like('Speed','完成进度');
                $filter->datetime('S_at','开工日期');
                $filter->datetime('E_at','计划完工日期');
            });
            $grid->actions(function ($actions) {
                // append一个操作
                $actions->append('<a href=""><i class="fa fa-eye"></i></a>');
            });
            $grid->model()->orderBy('id', 'desc');
            $grid->paginate(15);
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Admin::form(Project::class, function (Form $form) {

            $form->display('id', 'ID');
            $form->text('title','项目名称')->rules('required');
            $form->text('T_investment','总投资');
            $form->text('C_investment','累计完成投资');
            $form->text('Responsible_unit','项目负责单位');
            $form->text('Person','项目负责人');
            $form->text('Address','项目地址');
            $form->text('Speed','项目进度');
            $form->multipleImage('pictures','项目图片')->removable();
            $form->datetime('S_at', '开工时间')->default(now());
            $form->datetime('E_at', '预计结束时间')->default(now());
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
    public function release(Request $request)
    {
        foreach (Project::find($request->get('ids')) as $post) {
            $post->released = $request->get('action');
            $post->save();
        }
    }

    public function restore(Request $request)
    {
        return Project::onlyTrashed()->find($request->get('ids'))->each->restore();
    }
}
