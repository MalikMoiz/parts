<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\UD_Stock_Barcode_Image;
use DB;


class ItemController extends Controller
{
    public function item(Request $request){
        $partyno=session()->get('logininfo');
        $data1=UD_Stock_Barcode_Image::select('ItemNo','Code','Category','EngName','ItemName','Make','Model','Qty','Rate','prdImage')->Paginate(12);
            if((session()->get('logininfo.Type'))=="Admin" || (session()->get('logininfo.Type'))=="User" ||(session()->get('logininfo.Type'))=="Web" ){
    return view('Item',compact('data1','partyno'));
        }
        return view('welcome');
    }
    public function search(Request $request){
        $category=$request->get('category');
        $manufecturer=$request->get('manufecturer');
        $make=$request->get('make');
        $partyno=session()->get('logininfo');
        $data1=UD_Stock_Barcode_Image::where('Category','LIKE','%'.$category.'%')->Where('Manufacturer','LIKE','%'.$manufecturer.'%')->Where('Make','LIKE','%'.$make.'%')->paginate(12);
        if((session()->get('logininfo.Type'))=="Admin" || (session()->get('logininfo.Type'))=="User" ||(session()->get('logininfo.Type'))=="Web" ){
            return view('Item',compact('data1','partyno'));
                }
                return view('welcome');

    }
}
