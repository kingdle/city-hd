<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class CompletionAreaController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('地区生产总值完成情况');
            $content->description(now());

            $content->row(function (Row $row) {
                $row->column(4, view('admin.charts.economic-monitor.completion-area.month-text'));
                $row->column(8, view('admin.charts.economic-monitor.completion-area.charts'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-area.benchmark-speed'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-area.structure'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-area.gross-value'));
            });

        });
    }
}