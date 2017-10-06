<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class EconomicbenchmarkController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('经济对标');
            $content->description('');

            $content->row(function(Row $row) {
                $row->column(9, view('admin.charts.economic-monitor.charts'));
                $row->column(3, view('admin.charts.economic-monitor.tables'));
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
