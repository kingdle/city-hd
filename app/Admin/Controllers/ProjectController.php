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

            $content->body(view('admin.charts.project-monitor.dateline'));
            $content->body(view('admin.charts.project-monitor.project'));
            $content->row(function (Row $row) {
                $row->column(4, view('admin.charts.economic-benchmark.ranking-total'));
                $row->column(4, view('admin.charts.economic-benchmark.ranking-industry'));
                $row->column(4, view('admin.charts.economic-benchmark.ranking-assets'));
            });

        });
    }
}
