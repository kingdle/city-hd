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
            $content->description('(不含保税区)');

            $content->row(function (Row $row) {
                $row->column(4, view('admin.charts.economic-monitor.completion-sale.month-text'));
                $row->column(8, view('admin.charts.economic-monitor.completion-sale.charts'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-sale.benchmark-speed'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-sale.structure'));
            });

        });
    }
}