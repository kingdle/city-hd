<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class BenchmarkAreaController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('国内新区对比');
            $content->description('详情');

            $content->row(function (Row $row) {
                $row->column(3, view('admin.charts.economic-benchmark.area.ranking-total'));
                $row->column(3, view('admin.charts.economic-benchmark.area.ranking-assets'));
                $row->column(3, view('admin.charts.economic-benchmark.area.ranking-budget'));
                $row->column(3, view('admin.charts.economic-benchmark.area.ranking-trade-foreign'));
            });
            $content->body(view('admin.charts.economic-benchmark.area.table'));

        });
    }
}
