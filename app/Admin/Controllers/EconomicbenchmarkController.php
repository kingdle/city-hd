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

            $content->body(view('admin.charts.economic-benchmark.dateline'));
            $content->body(view('admin.charts.economic-benchmark.ranking'));
            $content->row(function (Row $row) {
                $row->column(4, view('admin.charts.economic-benchmark.ranking-total'));
                $row->column(4, view('admin.charts.economic-benchmark.ranking-industry'));
                $row->column(4, view('admin.charts.economic-benchmark.ranking-assets'));
                $row->column(4, view('admin.charts.economic-benchmark.ranking-budget'));
                $row->column(4, view('admin.charts.economic-benchmark.ranking-trade'));
                $row->column(4, view('admin.charts.economic-benchmark.ranking-trade-foreign'));
            });
            $content->body(view('admin.charts.economic-benchmark.ranking-table'));

        });
    }
}
