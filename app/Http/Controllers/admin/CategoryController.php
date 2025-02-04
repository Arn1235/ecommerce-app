<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function categoryList(){

        $Category=Category::all();
        return view('admin.category.categoryList',['categories'=> $Category]);
    }
    public function categoryAdd(){

        $Category=Category::all();
        return view('admin.category.categoryAdd');
    }
    public function categoryaddSave(Request $Request){
       
         $imagePath=Null;

        if($Request->hasfile('images')){
            $image = $Request->file('images');
            $filename = Str::random(40) . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('uploads');  
            $image->move($destinationPath, $filename);
            $imagePath = 'uploads/' . $filename;

        }
        $category=new Category;
        $category->name=$Request->name;
        $category->image=$imagePath;
        $category->description=$Request->description;
        $category->slug=$this->setnameslug($Request->name);
         $category->save();
         return redirect()->back()->with('success', 'category add successfully');
        
    }
    public function setnameslug($value){

      return  Str::slug($value);

    }
    
}
