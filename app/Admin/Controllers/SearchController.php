<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;
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

            $content->body(view('admin.charts.search.search-bar'));
//            $content->row(function (Row $row) {
//                $row->column(12, view('admin.charts.search.s-content'));
////                $row->column(2, view('admin.charts.search.s-list'));
//            });
        });
    }
    public function query($query)
    {
        return Admin::content(function (Content $content) use ($query) {

            $content->header('数据检索');
            $content->description(now());
            $content->body(view('admin.charts.search.search-bar'));

            if(!empty($query)){
                $query->where(DB::raw('concat(sms_title,sms_content)'),'like','%'.$keywords.'%');
            }
            return view('admin.charts.search.s-content', compact('post'));
        });

    }
}
