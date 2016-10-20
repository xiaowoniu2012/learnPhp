<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\Route;
use think\Url;
//Route::rule('hello','index/base/hello');
//Route::rule(['testbase'=>'index/base/testbase']);
Route::get('testbase','index/base/testbase');
Route::get('test',function() {
    return Url::build('testbase');
});
return [

//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
//    ],

    'hello/[:userId]' => 'index/hello',

    'blog/:year/:month'=>['blog/archive',['method'=>'get'],['year'=>'\d{4}','month'=>'\d{2}']],
    'blog/:id'=>['blog/get',['method'=>'get'],['id'=>'\d+']],
    'blog/:name'=>['blog/read',['method'=>'get'],['name'=>'\w+']],



];
