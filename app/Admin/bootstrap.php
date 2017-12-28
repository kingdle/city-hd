<?php

/**
 * Laravel-admin - admin builder based on Laravel.
 * @author z-song <https://github.com/z-song>
 *
 * Bootstraper for Admin.
 *
 * Here you can remove builtin form field:
 * Encore\Admin\Form::forget(['map', 'editor']);
 *
 * Or extend custom form field:
 * Encore\Admin\Form::extend('php', PHPEditor::class);
 *
 * Or require js and css assets:
 * Admin::css('/packages/prettydocs/css/styles.css');
 * Admin::js('/packages/prettydocs/js/main.js');
 *
 */
use Encore\Admin\Facades\Admin;
use App\Admin\Extensions\Form\WangEditor;
use Encore\Admin\Form;
use App\Admin\Extensions\Column\ExpandRow;
use App\Admin\Extensions\Column\OpenMap;
use App\Admin\Extensions\Column\FloatBar;
use App\Admin\Extensions\Column\Qrcode;
use App\Admin\Extensions\Column\UrlWrapper;
use App\Admin\Extensions\Nav\Links;
use Encore\Admin\Grid;
use Encore\Admin\Grid\Column;
use App\Admin\Extensions\Form\CKEditor;


Encore\Admin\Form::forget(['map', 'editor']);
Form::extend('editor', WangEditor::class);
//Form::extend('ckeditor', CKEditor::class);
app('view')->prependNamespace('admin', resource_path('views/admin'));

Admin::js('/js/timeline.js');
Admin::js('/vendor/chartjs/echarts.js');
Admin::css('/vendor/prism/prism.css');
Admin::js('/vendor/prism/prism.js');
Admin::js('/vendor/clipboard/dist/clipboard.min.js');

Column::extend('expand', ExpandRow::class);
Column::extend('openMap', OpenMap::class);
Column::extend('floatBar', FloatBar::class);
Column::extend('qrcode', Qrcode::class);
Column::extend('urlWrapper', UrlWrapper::class);
Column::extend('action', Grid\Displayers\Actions::class);

Column::extend('prependIcon', function ($value, $icon) {

    return "<span style='color: #999;'><i class='fa fa-$icon'></i>  $value</span>";

});

Admin::navbar(function (\Encore\Admin\Widgets\Navbar $navbar) {

//    $navbar->left(view('admin.search-bar'));
//    $navbar->right(new Links());

});
