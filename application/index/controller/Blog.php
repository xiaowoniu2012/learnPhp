<?php
/**
 * Created by PhpStorm.
 * User: smart
 * Date: 2016/10/20
 * Time: 下午4:04
 */

namespace app\index\event;
use think\Request;

class Blog
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

$blogInstance = \think\Loader::controller('Blog','event');

echo  'hello'.'<br>';

echo action('blog/read',['name'=>'test'],'event');
var_dump($blogInstance);
//echo $blogInstance->read('hello');

$request = Request::instance();
// 获取当前域名
echo 'domain: ' . $request->domain() . '<br/>';
// 获取当前入口文件
echo 'file: ' . $request->baseFile() . '<br/>';
// 获取当前URL地址 不含域名
echo 'url: ' . $request->url() . '<br/>';
// 获取包含域名的完整URL地址
echo 'url with domain: ' . $request->url(true) . '<br/>';
// 获取当前URL地址 不含QUERY_STRING
echo 'url without query: ' . $request->baseUrl() . '<br/>';
// 获取URL访问的ROOT地址
echo 'root:' . $request->root() . '<br/>';
// 获取URL访问的ROOT地址
echo 'root with domain: ' . $request->root(true) . '<br/>';
// 获取URL地址中的PATH_INFO信息
echo 'pathinfo: ' . $request->pathinfo() . '<br/>';
// 获取URL地址中的PATH_INFO信息 不含后缀
echo 'pathinfo: ' . $request->path() . '<br/>';
// 获取URL地址中的后缀信息
echo 'ext: ' . $request->ext() . '<br/>';