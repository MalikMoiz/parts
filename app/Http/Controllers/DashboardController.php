<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\VouchersView;
use Carbon\Carbon;
use DB;


class DashboardController extends Controller
{
    public function recovery (Request $request){
        $date=Carbon::today();
        $recovery=DB::table('VouchersView')->selectRaw('UserName, SUM(Amount) Amount')->where('DebitAcc',1001)->where('Date',$date)->groupBy('UserName')->get();
        return view('dashboard', [
            'recovery' => $recovery
        ]);

    }
    public function searchrecovery(Request $request){
        $fromdate=$request->get('fromdate');
        $todate=$request->get('todate');
        $recovery=DB::table('VouchersView')->selectRaw('UserName, SUM(Amount) Amount')->where('DebitAcc',1001)->whereBetween('Date',[$fromdate,$todate])->groupBy('UserName')->get();
        return view('dashboard', [
            'recovery' => $recovery
        ]);

    }
    public function searchusername(Request $request){
        $table=$request->get();
        $targetedcolumn=$request->get();
        $filter=$request->get();
        $result=DB::table($table)->select($targetedcolumn)->where($filter,5)->get();
        return $result;
    }
}