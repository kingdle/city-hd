<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class AreadevController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('区域发展监测');
            $content->description(now());
            $content->dateline('dateline');

            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.area-development.quota'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.area-development.quota-map'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.area-development.quota-run'));
            });
        });
    }
}