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

            $content->header('各功能区发展监测');
            $content->description('详情');

            $content->row(function (Row $row) {
                $js = Admin::js('/js/vue.min.js');
                $js1 = Admin::js('/js/vuetable1.js');
                $js2 = Admin::js('/js/vuechart.js');
                $row->column(12, view('admin.charts.area-development.quota', compact('js','js1','js2')));
            });
            $content->row(function (Row $row) {
                //$row->column(12, view('admin.charts.area-development.quota-map'));
            });
            $content->row(function (Row $row) {
                $row->column(12, view('admin.charts.area-development.quota-run'));
            });
        });
    }
}
