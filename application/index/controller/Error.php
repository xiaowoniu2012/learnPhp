<?php
/**
 * Created by PhpStorm.
 * User: xiaowoniu
 * Date: 16/10/20
 * Time: 下午11:58
 */

namespace app\index\controller;

use think\Request;

class Error
{
    public function index(Request $request){
        $cityname = $request->controller();
        return $this->showCity($cityname);
    }

    protected function  showCity($name){
        return 'city is ' . $name;
    }
}