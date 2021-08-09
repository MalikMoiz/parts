<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QryIMEIMovement;
use App\Models\UD_Price_Data;

class ProductHistoryController extends Controller
{
    public function history(Request $request){
    $search=$request->get('search');
    $radio=$request->get('radio');
        if($radio=="Sales"){
            $result=QryIMEIMovement::where('ItemNo',$search)->where('InvType',"SI")->get();
            $result2=UD_Price_Data::where('ItemNo',$search)->first();
            return view('History',compact('result','result2'));
        }
        else if($radio=="Purchase"){
            $result=QryIMEIMovement::where('ItemNo',$search)->where('InvType',"PI")->get();
            $result2=UD_Price_Data::where('ItemNo',$search)->get();
            return view('History',compact('result','result2'));

        }
        else if($radio=="Sales Return"){
            $result=QryIMEIMovement::where('ItemNo',$search)->where('InvType',"SR")->get();
            $result2=UD_Price_Data::where('ItemNo',$search)->get();
            return view('History',compact('result','result2'));
        }
        else if($radio=="Purchase Reurn"){
            $result=QryIMEIMovement::where('ItemNo',$search)->where('InvType',"PR")->get();
            $result2=UD_Price_Data::where('ItemNo',$search)->get();
            return view('History',compact('result','result2'));
        }
        else if($radio=="All"){
            $result=QryIMEIMovement::where('ItemNo',$search)->get();
            $result2=UD_Price_Data::where('ItemNo',$search)->get();
            return view('History',compact('result','result2'));

        }
    }
}
