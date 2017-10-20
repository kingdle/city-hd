<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class CompletionIndustryController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('工业生产总值完成情况');
            $content->description('详情');

            $content->row(function (Row $row) {
                $row->column(4, view('admin.charts.economic-monitor.completion-industry.month-text'));
                $row->column(8, view('admin.charts.economic-monitor.completion-industry.charts'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-industry.benchmark-speed'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-industry.structure'));
            });

        });
    }
}