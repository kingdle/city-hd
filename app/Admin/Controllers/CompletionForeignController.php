<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class CompletionForeignController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('外资外贸完成情况');
            $content->description('(不含保税区)');

            $content->row(function (Row $row) {
                $row->column(3, view('admin.charts.economic-monitor.completion-foreign.month-text'));
                $row->column(9, view('admin.charts.economic-monitor.completion-foreign.charts'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-foreign.benchmark-speed'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-foreign.structure'));
            });
            $content->row(function (Row $row) {
                $row->column(6, view('admin.charts.economic-monitor.completion-foreign.table-foreign'));
                $row->column(6, view('admin.charts.economic-monitor.completion-foreign.table-useforeign'));
            });

        });
    }
}