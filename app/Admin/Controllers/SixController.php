<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class SixController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('新经济产业监测');
            $content->description('详情');

            $content->body(view('admin.charts.industry-monitor.616.project'));
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

            $content->header('header');
            $content->description('description');

            $content->body($this->form()->edit($id));
        });
    }

    /**
     * Create interface.
     *
     * @return Content
     */
    public function show()
    {
        return Admin::content(function (Content $content) {

            $content->header('616');
            $content->description('六大支柱产业');

            $content->body(view('admin.charts.industry-monitor.616.six-content'));
        });
    }
}
