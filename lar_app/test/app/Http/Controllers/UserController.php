<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function __construct()
    {
//        $this->middleware('token')->only('index'); // 中间件 仅对某个方法 生效
        $this->middleware('token')->except('index'); // 中间件 除了某个方法 其他都生效

        //匿名
    }

    public function show($id){
        return view('user.profile',['user' => ['id' => $id,'name' => '老男孩']]);
    }
}
