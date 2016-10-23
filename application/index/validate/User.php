<?php
/**
 * Created by PhpStorm.
 * User: xiaowoniu
 * Date: 16/10/22
 * Time: 下午11:24
 */

namespace app\index\validate;
use think\Validate;

class User extends Validate
{
    protected $rule = [
        ['nickname|昵称','require|min:5','昵称不能为空|昵称长度不能小于5'],
        ['email|邮箱','require|email','邮箱格式错误'],
        ['birthday|生日','dateFormat:Y-m-d','生日格式错误,格式:xxxx-xx-xx'],
    ];
}