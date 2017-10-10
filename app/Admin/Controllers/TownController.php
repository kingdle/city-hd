<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class TownController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('产业小镇');
            $content->description(now());

            $content->row(function (Row $row) {
                $row->column(3, view('admin.charts.industry-monitor.town.t-list'));
                $row->column(9, view('admin.charts.industry-monitor.town.t-content'));
            });
        });
    }

}
