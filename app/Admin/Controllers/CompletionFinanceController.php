<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class CompletionFinanceController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('财政金融完成情况');
            $content->description('详情');

            $content->row(function (Row $row) {
                $row->column(4, view('admin.charts.economic-monitor.completion-finance.month-text'));
                $row->column(8, view('admin.charts.economic-monitor.completion-finance.charts'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-finance.benchmark-speed'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-finance.structure'));
            });
            $content->row(function (Row $row) {
                $row->column(6, view('admin.charts.economic-monitor.completion-finance.table-foreign'));
                $row->column(6, view('admin.charts.economic-monitor.completion-finance.table-useforeign'));
            });

        });
    }
}