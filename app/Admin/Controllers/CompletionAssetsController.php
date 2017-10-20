<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class CompletionAssetsController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('固定资产投资完成情况');
            $content->description('详情');

            $content->row(function (Row $row) {
                $row->column(4, view('admin.charts.economic-monitor.completion-assets.month-text'));
                $row->column(8, view('admin.charts.economic-monitor.completion-assets.charts'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-assets.benchmark-speed'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.economic-monitor.completion-assets.structure'));
            });
            $content->row(function (Row $row) {
                $row->column(4, view('admin.charts.economic-monitor.completion-assets.total-table-area'));
                $row->column(4, view('admin.charts.economic-monitor.completion-assets.total-table-town'));
                $row->column(4, view('admin.charts.economic-monitor.completion-assets.total-table-dept'));
            });

        });
    }
}