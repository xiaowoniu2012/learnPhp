<?php
/**
 * Created by PhpStorm.
 * User: xiaowoniu
 * Date: 16/10/25
 * Time: 下午9:13
 */

namespace app\index\controller;
use think\Controller;

class layoutController extends Controller
{
    public function test(){
        return $this->fetch();
    }
}