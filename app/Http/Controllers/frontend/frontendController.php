<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    //
    public function index() {
        $news=News::all();
        $news_c=Category::with("News")->get();
        $randomData = News::inRandomOrder()->limit(2)->get();
        return view("frontend.index",['news'=>$news,"newcat"=>$news_c,"randomData"=>$randomData]);
    }
}
