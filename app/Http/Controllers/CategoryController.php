<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function chucdanh(){
        return view('admin.categories.chucdanh.index');
    }

    public function calamviec(){
        return view('admin.categories.calamviec.index');
    }

    public function loaichamcong(){
        return view('admin.categories.loaichamcong.index');
    }

    public function loaihopdong(){
        return view('admin.categories.loaihopdong.index');
    }
}
