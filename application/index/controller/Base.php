<?php
/**
 * Created by PhpStorm.
 * User: smart
 * Date: 2016/10/19
 * Time: 下午2:44
 */

namespace app\index\controller;
use think\Controller;

class Base extends  Controller
{
    public function hello(){
        return "hello ,there is base hello!  : )";
    }
    public function testbase() {
        return "this is testbase function";
    }
}

