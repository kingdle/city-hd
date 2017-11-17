<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Layout\Content;
use Encore\Admin\Layout\Row;
use Encore\Admin\Auth\Database\Menu;
use Encore\Admin\Auth\Database\Role;
use Encore\Admin\Layout\Column;
use Encore\Admin\Tree;
use Encore\Admin\Widgets\Box;



class HomeController extends Controller
{
    public function index()
    {
//        return Admin::content(function (Content $content) {
//
//            $content->header('');
//            $content->description(now());
//
//            $content->row(function (Row $row) {
//                $row->column(12, view('admin.charts.admin-home'));
//            });
//
//        });
        return view('admin.charts.admin-home');
    }
}
