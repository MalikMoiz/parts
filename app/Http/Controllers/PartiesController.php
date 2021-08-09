<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Parties;

class PartiesController extends Controller
{

    public function ReceivePartySearch(Request $request){
        $search=$request->get('search');
        $partydata=null;
        $vrno=null;
        $data=Parties::where('PartyNo','LIKE','%'.$search. '%')->orwhere('PartyName','LIKE','%'.$search.'%')->get();
        $party=Parties::where('PartyNo',1001)->first();
        return view ('CashReceive',compact('data','party','partydata','vrno'));
    }
    public function PaymentPartySearch(Request $request){
        $search=$request->get('search');
        $partydata=null;
        $vrno=null;
        $data=Parties::where('PartyNo','LIKE','%'.$search. '%')->orwhere('PartyName','LIKE','%'.$search.'%')->get();
        $party=Parties::where('PartyNo',1001)->first();
        return view ('CashPayment',compact('data','party','partydata','vrno'));

    }
    public function SelectPaymentParty(Request $request){
        $partyno=$request->get('accNo');
        $data=null;
        $vrno=null;
        $partydata=Parties::where('PartyNo',$partyno)->get();
        $party=Parties::where('PartyNo',1001)->first();
        return view ('CashPayment',compact('data','party','partydata','vrno'));

    }
    public function SelectReceiveParty(Request $request){
        $partyno=$request->get('accNo');
        $data=null;
        $vrno=null;
        $partydata=Parties::where('PartyNo',$partyno)->get();
        $party=Parties::where('PartyNo',1001)->first();
        return view ('CashReceive',compact('data','party','partydata','vrno'));
    }
    public function journalCreditPartySearch(Request $request){

        $search=$request->get('search');
        $partydata=null;
        $debitdata=null;
        $creditdata=null;
        $vrno=null;
        $debitparty=session()->get('debitparty');
        $creditparty=session()->get('creditparty');
        $creditdata=Parties::where('PartyNo','LIKE','%'.$search. '%')->orwhere('PartyName','LIKE','%'.$search.'%')->get();
        return view ('JournalVoucher',compact('creditdata','partydata','debitdata','creditdata','creditparty','debitparty','vrno'));
    }
    public function journalDebitPartySearch(Request $request){
        $search=$request->get('search');
        $partydata=null;
        $debitdata=null;
        $creditdata=null;
        $vrno=null;
        $debitparty=session()->get('debitparty');
        $creditparty=session()->get('creditparty');
        $debitdata=Parties::where('PartyNo','LIKE','%'.$search. '%')->orwhere('PartyName','LIKE','%'.$search.'%')->get();
        return view ('JournalVoucher',compact('debitdata','partydata','debitdata','creditdata','debitparty','creditparty','vrno'));

    }
    public function selectJournalCreditParty(Request $request){
        $partyno=$request->get('accNo');
        $data=null;
        $debitdata=null;
        $creditdata=null;
        $creditparty=null;
        $vrno=null;
        $creditpartydata=Parties::where('PartyNo',$partyno)->first();
        session()->put('creditparty',$creditpartydata);
        $creditparty=session()->get('creditparty');
        $debitparty=session()->get('debitparty');
        return view ('JournalVoucher',compact('data','creditparty','debitdata','creditdata','debitparty','creditparty','vrno'));

    }
    public function selectJournalDebitParty(Request $request){
        $partyno=$request->get('accNo');
        $data=null;
        $debitdata=null;
        $creditdata=null;
        $vrno=null;
        $debitpartydata=Parties::where('PartyNo',$partyno)->first();
        session()->put('debitparty',$debitpartydata);
        $debitparty=session()->get('debitparty');
        $creditparty=session()->get('creditparty');
        return view ('JournalVoucher',compact('data','debitparty','creditdata','debitdata','creditparty','vrno'));

    }
}
