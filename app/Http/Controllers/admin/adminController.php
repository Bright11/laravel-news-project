<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //

    public function adminhome(){
        return view('admin.adminhome');
    }

    public function admincategory(){
        $cat=Category::all();
        return view("admin.category",['cat'=>$cat]);
    }

    public function newsform(){
        $cat=Category::all();
        return view("admin.newsforms",['cat'=>$cat]);
    }
}
