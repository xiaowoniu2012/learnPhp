<?php
/**
 * Created by PhpStorm.
 * User: smart
 * Date: 2016/10/24
 * Time: 下午5:51
 */

namespace app\index\controller;
use think\Controller;

class BootstrapController extends Controller
{
    public  function table(){
        $this->assign('number',23000);
        return $this->fetch();
    }

    public function test(){
        return $this->fetch();
    }
}