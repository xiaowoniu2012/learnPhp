<?php

/**
 * Created by PhpStorm.
 * User: xiaowoniu
 * Date: 16/10/22
 * Time: 下午9:19
 */

namespace app\index\model;
use think\Model;
class User extends Model
{
    protected $table = 'my_user';

//    protected function getBirthdayAttr($birthday){
//        return date('Y-m-d',$birthday);
//    }
//
//    protected function setBirthdayAttr($value){
//        return strtotime($value);
//    }

    protected $type = [
        'birthday'=>'timestamp:Y-m-d',
    ];


    //auto set status=1 while insert record
    protected $insert = ['status'=>1];

    //stuats query
    protected function scopeStatus($query,$status){
        return $query->where('status',$status);
    }
}