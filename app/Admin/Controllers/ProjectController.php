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
            $content->description('详情');

            //$content->body(view('admin.charts.industry-monitor.616.dateline'));
            $content->body(view('admin.charts.project-monitor.p-list'));

        });
    }
}
