<?php

namespace App\Admin\Controllers;

use App\Admin\Extensions\Tools\UserGender;
use App\Http\Controllers\Controller;
use App\Models\ChinaArea;
use App\Models\Dept;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Facades\Admin;
use Encore\Admin\Controllers\ModelForm;
use Encore\Admin\Layout\Content;
use Encore\Admin\Widgets\Table;
use Illuminate\Support\Facades\Request;

class DeptController extends Controller
{
    use ModelForm;

    protected function index()
    {
        return Admin::content(function (Content $content) {
            $content->header('部门管理');
            $content->description('列表');
            $content->body($this->grid());
        });
    }

    public function edit($id)
    {
        return Admin::content(function (Content $content) use ($id) {

            $content->header('部门管理');
            $content->description('编辑');

            $content->body($this->form()->edit($id));
        });
    }

    public function create()
    {
        return Admin::content(function (Content $content) {

            $content->header('部门管理');
            $content->description('新增');

            $content->body($this->form());
        });
    }

    protected function grid()
    {
        return Admin::grid(Dept::class, function (Grid $grid) {

            $grid->model()->gender(Request::get('gender'));

            $grid->model()->with('profile')->orderBy('id', 'DESC');

            $grid->paginate(20);

            $grid->id('ID')->sortable();

            $grid->name('部门')->editable();

//            $grid->column('expand','介绍')->expand(function () {
//
//                $profile = array_only($this->profile, ['homepage', 'gender', 'birthday', 'address', 'last_login_at', 'last_login_ip', 'lat', 'lng']);
//
//                return new Table([], $profile);
//
//            }, 'Profile');
//
//            $grid->column('position')->openMap(function () {
//
//                return [$this->profile['lat'], $this->profile['lng']];
//
//            }, 'Position');

            $grid->column('profile.homepage', '官网')->urlWrapper();
            $grid->profile()->mobile('应急手机')->sortable()->editable();
            $grid->email('邮箱')->editable();

            //$grid->profile()->mobile()->prependIcon('phone');

            //$grid->column('profile.age')->progressBar(['success', 'striped'], 'xs')->sortable();



//            $grid->created_at('创建时间');

            $grid->updated_at('更新时间');

            $grid->filter(function (Grid\Filter $filter) {

//                $filter->disableIdFilter();
                $filter->equal('name','部门');
                $filter->equal('email','邮箱');
                $filter->equal('mobile','应急手机');
//                $filter->equal('address.province_id', 'Province')
//                    ->select(ChinaArea::province()->pluck('name', 'id'))
//                    ->load('address.city_id', '/demo/api/china/city');
//
//                $filter->equal('address.city_id', 'City')->select()
//                    ->load('address.district_id', '/demo/api/china/district');
//
//                $filter->equal('address.district_id', 'District')->select();
            });

//            $grid->tools(function ($tools) {
//                $tools->append(new UserGender());
//            });

            $grid->actions(function ($actions) {

//                if ($actions->getKey() % 2 == 0) {
                $actions->disableDelete();
//                } else {
//                $actions->append('<a href=""><i class="fa fa-eye"></i></a>');
//                    $actions->disableEdit();
//                    $actions->prepend('<a href=""><i class="fa fa-paper-plane"></i></a>');
//                }
            });
        });
    }

    public function form()
    {
        return Dept::form(function (Form $form) {

            $form->model()->makeVisible('password');

            $form->tab('基本信息', function (Form $form) {

                $form->display('id');

                //$form->input('name')->rules('required');

                $form->text('name', '名称')/*->rules('required')*/
                ;
                $form->email('email', '邮箱')->rules('required');
                $form->display('created_at', '创建日期');
                $form->display('updated_at', '更新日期');

            })->tab('简介', function (Form $form) {

                $form->url('profile.homepage', '首页');
//                $form->ip('profile.last_login_ip','最后登录IP');
//                $form->datetime('profile.last_login_at','最后登录时间');
                $form->color('profile.color', '部门主题色')->default('#c48c20');
                $form->mobile('profile.mobile', '手机')->default('13788899099');
//                $form->date('profile.birthday');

//                $form->map('profile.lat', 'profile.lng', 'Position')->useTencentMap();
//                $form->slider('profile.age', 'Age')->options(['max' => 50, 'min' => 20, 'step' => 1, 'postfix' => 'years old']);
//                $form->datetimeRange('profile.created_at', 'profile.updated_at', 'Time line');


            })->tab('地址', function (Form $form) {

                $form->select('address.province_id', '省')->options(
                    ChinaArea::province()->pluck('name', 'id')
                )
                    ->load('address.city_id', '/demo/api/china/city')
                    ->load('test', '/demo/api/china/city');

                $form->select('address.city_id', '市')->options(function ($id) {
                    return ChinaArea::options($id);
                })->load('address.district_id', '/demo/api/china/district');

                $form->select('address.district_id', '区')->options(function ($id) {
                    return ChinaArea::options($id);
                });

                $form->text('address.address', '详细地址');
            })->tab('开放平台', function (Form $form) {

                $form->text('sns.qq', '联系QQ');
                $form->text('sns.wechat', '微信公众号');
                $form->text('sns.weibo', '微博');
                $form->text('sns.github', 'Github');
                $form->text('sns.google', '谷歌账号');
                $form->text('sns.facebook', '脸书账号');
                $form->text('sns.twitter', '推特账号');
                $form->display('sns.created_at', '填写日期');
                $form->display('sns.updated_at', '更新日期');
//            })->tab('密码', function (Form $form) {
//
//                $form->password('password')->rules('confirmed');
//                $form->password('password_confirmation');

            });

            $form->ignore(['password_confirmation']);
        });
    }
}

