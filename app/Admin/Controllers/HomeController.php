<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;


class HomeController extends Controller
{
    public function index()
    {
        return Admin::content(function (Content $content) {

            $content->header('后台首页');
            $content->description('后台首页');

            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.admin-home'));
            });
        });
    }
}
