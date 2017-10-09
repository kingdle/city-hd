<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class EconomicmonitorController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('新经济运行监测');
            $content->description(now());

            $content->row(function (Row $row) {
                $row->column(3, view('admin.charts.economic-monitor.area'));
                $row->column(3, view('admin.charts.economic-monitor.industry'));
                $row->column(3, view('admin.charts.economic-monitor.assets'));
                $row->column(3, view('admin.charts.economic-monitor.sale'));
            });
            $content->row(function(Row $row) {
                $row->column(5, view('admin.charts.economic-monitor.tables'));
                $row->column(7, view('admin.charts.economic-monitor.charts'));

            });
            $content->body(view('admin.charts.economic-monitor.economic2017'));
            $content->row(function (Row $row) {
                $row->column(4, view('admin.charts.economic-monitor.country'));
                $row->column(4, view('admin.charts.economic-monitor.shandong'));
                $row->column(4, view('admin.charts.economic-monitor.qingdao'));
            });

        });
    }

}
