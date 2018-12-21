<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// 后台登录展示页面
ROute::get('/admin/login',function(){
    return view('admin.login');
});
// 后台登录处理表单
Route::post('/admin/handleLogin','ManageController@handleLogin');



// 管理员登录成功跳转的页面
Route::get('/admin/successLogin',function(){
    return view('admin.index');
});

// 会员列表
Route::get('/admin/memberList','UserController@memberList');
// 删除会员 单个删除
Route::get('/admin/memberDelete/{id}','UserController@memberDeleteByOne');
// 删除会员 批量删除
Route::get('/admin/memberDeleteByAll','UserController@memberDeleteByAll');

// 拍品列表
Route::get('/admin/lotList','LotController@lotList');
// 新增拍品 页面展示表单
Route::get('/admin/lotAdd',function(){
    return view('admin.lotAdd');
});
// 新增拍品 处理表单
Route::get('/admin/lotAddHandle','LotController@lotAddHandle');
// 新增拍品 属性处理表单
Route::post('/admin/attrHandle','LotController@attrHandle');

