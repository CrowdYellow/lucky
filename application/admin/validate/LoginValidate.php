<?php

namespace app\admin\validate;

use think\Validate;

class LoginValidate extends Validate
{
    protected $rule = [
        'name|账号'      => 'require',
        'password|密码'  => 'require',
        'captcha|验证码' => 'require|captcha',
    ];
}
