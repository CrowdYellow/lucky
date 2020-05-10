<?php

namespace app\admin\controller;

use app\admin\validate\LoginValidate;
use app\common\model\Admin;
use think\Controller;
use think\Request;

class Login extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function login(Request $request)
    {
        $validate = new LoginValidate();

        if (!$validate->check(input())) {
            $this->error($validate->getError());
        }

        $admin = Admin::where('name', input('name'))->find();

        if (!$admin) {
            $this->error('账号或密码错误');
        }

        if (!password_verify(input('password'), $admin->password)) {
            $this->error('账号或密码错误');
        }

        $this->success('登陆成功！', '/backstage');
    }
}
