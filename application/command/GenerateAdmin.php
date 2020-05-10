<?php

namespace app\command;

use app\common\model\Admin;
use think\console\Command;
use think\console\Input;
use think\console\Output;

class GenerateAdmin extends Command
{
    protected function configure()
    {
        // 指令配置
        $this->setName('generate_admin');
        // 设置参数

    }

    protected function execute(Input $input, Output $output)
    {
        $admin            = new Admin();
        $admin->name      = 'Echo';
        $admin->password  = password_hash('password', 1);
        $admin->role_id   = 1;
        $admin->save();
        $admin->generateUniqueKey();
        // 指令输出
        $output->writeln('generateadmin');
    }
}
