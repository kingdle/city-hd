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
            $content->description(now());

            $content->body(view('admin.charts.industry-monitor.616.dateline'));
            $content->body(view('admin.charts.industry-monitor.616.project'));
        });
    }
}
