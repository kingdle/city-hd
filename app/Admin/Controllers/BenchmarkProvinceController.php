<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class BenchmarkProvinceController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('新区与省内区市对比');
            $content->description('详情');

            $content->row(function (Row $row) {
                $row->column(2, view('admin.charts.economic-benchmark.province.ranking-total'));
                $row->column(2, view('admin.charts.economic-benchmark.province.ranking-industry'));
                $row->column(2, view('admin.charts.economic-benchmark.province.ranking-assets'));
                $row->column(2, view('admin.charts.economic-benchmark.province.ranking-budget'));
                $row->column(2, view('admin.charts.economic-benchmark.province.ranking-trade'));
                $row->column(2, view('admin.charts.economic-benchmark.province.ranking-trade-foreign'));
            });
            $content->body(view('admin.charts.economic-benchmark.province.table'));

        });
    }
}
