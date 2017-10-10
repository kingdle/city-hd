<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;

class SearchController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('数据检索');
            $content->description(now());

            $content->row(function (Row $row) {
                $row->column(2, view('admin.charts.search.s-list'));
                $row->column(10, view('admin.charts.search.s-content'));
            });


        });
    }
}
