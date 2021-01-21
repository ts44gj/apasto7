<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AparelController extends Controller
{
    //post作成画面を表示
    public function index(){
         return view('admin.admin_aparel');
    }
}
