<?php

use \think\facade\Route;

# 后台登陆页面
Route::group('backstage', function () {
    # 后台登录页面
    Route::get('/login', 'admin/Login/index');
    # 后台登录页面
    Route::get('/', 'admin/Index/index');
    # 管理员
    Route::get('admins', 'admin/Admins/index');
});