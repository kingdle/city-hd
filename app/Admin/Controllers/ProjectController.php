<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

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
            $content->body(view('admin.charts.project-monitor.p-list'));

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
}
