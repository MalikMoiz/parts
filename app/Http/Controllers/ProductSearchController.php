<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UD_SearchArticle;
use DB;


class ProductSearchController extends Controller
{
    public function search(Request $request){
        $category=$request->get('category');
        $manufecturer=$request->get('manufecturer');
        $make=$request->get('make');
            $result=UD_SearchArticle::where('Category','LIKE','%'.$category.'%')->Where('Manufacturer','LIKE','%'.$manufecturer.'%')->Where('Make','LIKE','%'.$make.'%')->get();
            return view('Products',compact('result'));

        
    }
}