<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class CompletionSaleController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('限上贸易完成情况');
            $content->description('详情');

            $content->row(function (Row $row) {
                $row->column(4, view('admin.charts.economic-monitor.completion-area.month-text'));
                $row->column(8, view('admin.charts.economic-monitor.completion-area.i-charts'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-area.benchmark-speed'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-area.run-one'));
            });
            $content->row(function (Row $row) {
                $row->column(8, view('admin.charts.economic-monitor.completion-area.industry-distribution'));
                $row->column(4, view('admin.charts.economic-monitor.completion-area.i-i-total'));
            });

        });
    }
}