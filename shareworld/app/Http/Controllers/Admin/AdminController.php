<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\User;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //简单调试工具
        $login = true;
        // $login = false;

        //判断跳转页面
        if($login == true){
            return view('admin/index');
        } else {
            return view('admin/login/login');
        }
    }

}
