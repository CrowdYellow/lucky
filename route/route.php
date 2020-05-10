<?php

use \think\facade\Route;

# 后台登陆页面
Route::group('backstage', function () {
    # 后台登录页面
    Route::get('/login', 'admin/Login/index');
    Route::post('/login', 'admin/Login/login');
    # 后台首页
    Route::get('/', 'admin/Index/index');
    # 管理员
    Route::get('admins', 'admin/Admins/index');
});