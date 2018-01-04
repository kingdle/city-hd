<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Form;
use Encore\Admin\Grid;


class ProjectController extends Controller
{
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

            $grid->title('项目名称')->sortable()->editable();
            $grid->Address('地址')->sortable()->editable();
            $grid->S_at('开工日期')->sortable();
            $grid->Speed('完成进度')->sortable();
            $grid->updated_at('更新日期');
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
            $form->text('T_investment','总投资')->rules('required');
            $form->text('C_investment','累计完成投资')->rules('required');
            $form->text('Responsible_unit','项目负责单位')->rules('required');
            $form->text('Person','项目负责人')->rules('required');
            $form->text('Address','项目地址')->rules('required');
            $form->text('Speed','项目进度')->rules('required');
            $form->multipleImage('pictures','项目图片')->removable();
            $form->datetime('S_at', '开工时间')->default(now());
            $form->datetime('E_at', '预计结束时间')->default(now());
            $form->display('created_at', 'Created At');
            $form->display('updated_at', 'Updated At');
        });
    }
}
