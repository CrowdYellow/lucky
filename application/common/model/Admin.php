<?php

namespace app\common\model;

use think\Model;

class Admin extends Model
{
    protected $name = 'admins';

    public $autoWriteTimestamp = true;
}
