<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Zal;
use App\Models\Parties;
use DB;
use DateTime;

class LedgerController extends Controller
{
    public function data(Request $request){
        $party=$request->get('partyno');
        $party=(int)$party;
        $partyname=$request->get('partyname');
        $datefrom=$request->get('datefrom');
        $dateto=$request->get('dateto');
        $msg="NO RECORDS TO DISPLAY";
      
        $compid="1";
        $data=null;
        
        $partyno=session()->get('logininfo');
        if(!($party=="")){
        DB::select(DB::raw("EXEC UD_PartyLedger $party, '$datefrom', '$dateto', $compid"));
        $data=Zal::select('SerialNo','Narration','Debit','Credit','InvType','InvNo','trDate','Balance','BalType')->where('AccNo',$party)->get();
        if($partyno){
            return view('Ledger',compact('msg','data','partyno','party'));
        }
        }
        else{
            $accountno=Parties::where('PartyName',$partyname)->pluck('PartyNo');
            $accountno=$accountno[0];
            DB::select(DB::raw("EXEC UD_PartyLedger $accountno, '$datefrom', '$dateto', $compid"));
            $data=Zal::select('SerialNo','Narration','Debit','Credit','InvType','InvNo','trDate','Balance','BalType')->where('AccNo',$accountno)->get();
            
            if($partyno){
                return view('Ledger',compact('msg','data','partyno','party'));
            }

        }
        
            return view('welcome');

    }
}

        
        
    