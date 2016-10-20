<?php
/**
 * Created by PhpStorm.
 * User: smart
 * Date: 2016/10/20
 * Time: 下午4:04
 */

namespace app\index\controller;
use think\Controller;

class Blog extends Controller
{
    public function get($id) {
        return 'blog id is : ' .$id;
    }

    public function read($name){
        return 'read page name is : ' . $name;
    }

    public function archive($year,$month){
        return 'article post at year : '.$year.' month: '.$month;
    }

}