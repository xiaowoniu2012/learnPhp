<?php
/**
 * Created by PhpStorm.
 * User: xiaowoniu
 * Date: 16/10/20
 * Time: 下午11:05
 */

namespace app\index\controller;


class City
{
    public function _empty($name){
//        return $this->showCity('invalid city');
        $data = ['nmae'=>'smart','id'=>'20019','status'=>200,'msg'=>'success'];
        return json_encode($data);
    }

    public function test(){
        return view();
    }

    protected function showCity($name){
        return 'city is '.$name;
    }
}