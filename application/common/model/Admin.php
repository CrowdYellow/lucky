<?php

namespace app\common\model;

use think\Model;

class Admin extends Model
{
    protected $name = 'admins';

    public $autoWriteTimestamp = 'datetime';

    public function generateUniqueKey()
    {
        $this->admin_key = md5($this->id.$this->name.$this->create_time);
        $this->save();
    }
}
