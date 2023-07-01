<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class adminpostController extends Controller
{
    //
    public function postcategory(Request $req){
        $validatedData = $req->validate([
            'name' => ['required', 'unique:categories', 'max:255'],
        ]);
        $cat=new Category();
        $cat->name=$req->name;
        $cat->save();
        return redirect()->back();
    }

    public function postnews(Request $req){
        $news= new News;
        $news->headeline=$req->headeline;
        $news->cat_id=$req->cat_id;
        $news->description=$req->description;
        $news->writer="Chika";
        if($req->filled("imagelink")){
            $news->imagelink=$req->imagelink;
            $news->save();
            return redirect()->back();
        } elseif($req->hasFile('image')){
            $path =$news->image=$req->image->store("public/newsimages");
            $news->image=$path;
            $news->save();
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }

    function deletcat(Request $rq,$id){

        $delete= Category::destroy($id);
        return redirect()->back();
    }
}
