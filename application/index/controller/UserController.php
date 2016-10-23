<?php
/**
 * Created by PhpStorm.
 * User: xiaowoniu
 * Date: 16/10/22
 * Time: 下午9:19
 */

namespace app\index\controller;
use \app\index\model\User;
use think\Controller;

class UserController extends Controller
{
    public function add(){
        $user = new User;
//        $user['nickname']='取什么名好啊';
//        $user['email']='test124@qq.com';
//        $user['birthday']='1990-12-12';

        if ($user->allowField(true)->validate(true)->save(input('post.'))){
            return 'user : ' . $user->nickname . 'id : ' .$user->id . 'add successful ! <br>';
        }else{
            return $user->getError();
        }

    }

    public function addlist(){
        $user = new User;
        $userList = [
            ['nickname'=>'张三','email'=>'test2222@126.com','birthday'=>'1992-11-11'],
            ['nickname'=>'李小明','email'=>'test3333@126.com','birthday'=>'1991-11-11'],
        ];
        if ($user->saveAll($userList)){
            return 'add userlist successful <br>';
        }else{
            return 'add userlist fail <br>';
        }
    }

    public function read($id=''){
//        $user = User::get($id);
        $user = User::where('id',$id)->find();
//        foreach ($list as $user){
//            print 'user nickname : '.$user->nickname . '<br>';
//            print 'user email : '.$user->email . '<br>';
//            print 'user birthday : ' . $user->birthday .'<br>';
//            print '============================================<br><br>';
//        }

        return json_encode($user);

    }

    public function all(){
        $list = User::scope('status',1)->all();
        foreach ($list as $user){
            print 'user nickname : '.$user->nickname . '<br>';
            print 'user email : '.$user->email . '<br>';
            print 'user birthday : ' . $user->birthday .'<br>';
            print '============================================<br><br>';


        }
    }

    public function update($id=''){
        $user['id']=$id;
        $user['nickname'] = '是谁啊';
//        if ($user->save()){
//            echo 'update success!';
//        }else{
//            echo 'update fail';
//        }

        $result = User::update($user);

        echo  'update success';
    }

    public function delete($id=''){
        $user['id']=$id;
        $result = User::destroy($user);
        echo 'delete successful!';
    }


    public function create(){
        return view('user/create');
    }


    public function index(){
        $list = User::paginate(3);
        $this->assign('list',$list);
//        $this->assign('count',count($list));
        return $this->fetch();
    }

}