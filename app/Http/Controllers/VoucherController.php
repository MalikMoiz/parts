<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Vouchers;
use App\Models\Ledger;
use App\Models\Parties;
use App\Models\QryTialBalance;
use Carbon\Carbon;

class VoucherController extends Controller
{
    public function CashPaymentVoucher(Request $request){
        $date=Carbon::today();
        $amount=$request->get('amount');
        $check=$request->get('check');
        $debitpartyname=$request->get('debitpartyname');
        $creditpartyname=$request->get('creditpartyname');
        $debitpartyno=Parties::where('PartyName',$debitpartyname)->first();
        $debitpartyno=$debitpartyno->PartyNo;
        $creditpartyno=Parties::where('PartyName',$creditpartyname)->first();
        $creditpartyno=$creditpartyno->PartyNo;
        $narration=$request->get('narration');
        $balance=QryTialBalance::where('PartyNo',$debitpartyno)->first();
        $phone=Parties::where('PartyName',$debitpartyname)->first();
        $phone=$phone->Mobile;
        $phone = substr($phone, 2, 10);
        $balance=$balance->Balance;
        $smsid=5;
        $balance=(int)$balance;
        $amount=(int)$amount;
        $netbalance=$balance + $amount;
        $time=Carbon::now();
        $time=(string)$time;
        $trdate=Carbon::today();
        $trdate=(string)$trdate;
        $userno=session()->get('logininfo.UserNo');
        $compid=session()->get('logininfo.CompId');
        $username=session()->get('logininfo.UserName');
        $vrno=Vouchers::max('VNo')+1;
        $values=array('VType'=>'CP','CompId'=>$compid,'VNo'=>$vrno,'Date'=>$date,'Narration'=>$narration,'DebitAcc'=>$debitpartyno,'CreditAcc'=>$creditpartyno,'Amount'=>$amount,'USERID'=>$userno,'TrDate'=>$trdate,'TrTime'=>$time,'EmpId'=>$userno);
        $debit=array('InvType'=>'CP','InvNo'=>$vrno,'CompId'=>$compid,'Date'=>$date,'Narration'=>$narration,'AccNo'=>$debitpartyno,'Debit'=>$amount,'Credit'=>'0','USERID'=>$username,'TrDate'=>$trdate,'TrTime'=>$time);
        $credit=array('InvType'=>'CP','InvNo'=>$vrno,'CompId'=>$compid,'Date'=>$date,'Narration'=>$narration,'AccNo'=>$creditpartyno,'Debit'=>'0','Credit'=>$amount,'USERID'=>$username,'TrDate'=>$trdate,'TrTime'=>$time);
        Vouchers::insert($values);
        Ledger::insert($debit);
        Ledger::insert($credit);
        $party=Parties::where('PartyNo',1001)->first();
        $data=null;
        $partydata=parties::all();
        if($check){
        DB::statement("SET NOCOUNT ON ;EXEC UD_SmsFormat @Number='$phone', @SmsID='$smsid',@Amount='$amount',@PrevBal='$balance',@NetBal='$netbalance',@InvNo='$vrno'");
        }
        return view('CashPayment',compact('party','data','partydata','vrno'));

    }
    public function cashReceiveVoucher(Request $request){
        $date=$request->get('date');
        $amount=$request->get('amount');
        $check=$request->get('check');
        $debitpartyname=$request->get('debitpartyname');
        $creditpartyname=$request->get('creditpartyname');
        $debitpartyno=Parties::where('PartyName',$debitpartyname)->first();
        $debitpartyno=$debitpartyno->PartyNo;
        $creditpartyno=Parties::where('PartyName',$creditpartyname)->first();
        $creditpartyno=$creditpartyno->PartyNo;
        $narration=$request->get('narration');
        $balance=QryTialBalance::where('PartyNo',$creditpartyno)->first();
        $phone=Parties::where('PartyName',$creditpartyname)->first();
        $phone=$phone->Mobile;
        $phone = substr($phone, 2, 10);
        $balance=$balance->Balance;
        $smsid=6;
        $balance=(int)$balance;
        $amount=(int)$amount;
        $netbalance=$balance + $amount;
        $time=Carbon::now();
        $time=(string)$time;
        $trdate=Carbon::today();
        $trdate=(string)$trdate;
        $userno=session()->get('logininfo.UserNo');
        $compid=session()->get('logininfo.CompId');
        $username=session()->get('logininfo.UserName');
        $vrno=Vouchers::max('VNo')+1;
        $values=array('VType'=>'CR','CompId'=>$compid,'VNo'=>$vrno,'Date'=>$date,'Narration'=>$narration,'DebitAcc'=>$debitpartyno,'CreditAcc'=>$creditpartyno,'Amount'=>$amount,'USERID'=>$userno,'TrDate'=>$trdate,'TrTime'=>$time,'EmpId'=>$userno);
        $debit=array('InvType'=>'CR','InvNo'=>$vrno,'CompId'=>$compid,'Date'=>$date,'Narration'=>$narration,'AccNo'=>$debitpartyno,'Debit'=>$amount,'Credit'=>'0','USERID'=>$username,'TrDate'=>$trdate,'TrTime'=>$time);
        $credit=array('InvType'=>'CR','InvNo'=>$vrno,'CompId'=>$compid,'Date'=>$date,'Narration'=>$narration,'AccNo'=>$creditpartyno,'Debit'=>'0','Credit'=>$amount,'USERID'=>$username,'TrDate'=>$trdate,'TrTime'=>$time);
        Vouchers::insert($values);
        Ledger::insert($debit);
        Ledger::insert($credit);
        $party=Parties::where('PartyNo',1001)->first();
        $data=null;
        $partydata=parties::all();
        if($check){
        DB::statement("SET NOCOUNT ON ;EXEC UD_SmsFormat @Number='$phone', @SmsID='$smsid',@Amount='$amount',@PrevBal='$balance',@NetBal='$netbalance',@InvNo='$vrno'");
        }
        return view('CashReceive',compact('party','data','partydata','vrno'));


    }
    public function journalVoucher(Request $request){
        $date=$request->get('date');
        $amount=$request->get('amount');
        $debitpartyname=$request->get('debitpartyname');
        $creditpartyname=$request->get('creditpartyname');
        $debitpartyno=Parties::where('PartyName',$debitpartyname)->first();
        $debitpartyno=$debitpartyno->PartyNo;
        $creditpartyno=Parties::where('PartyName',$creditpartyname)->first();
        $creditpartyno=$creditpartyno->PartyNo;
        $narration=$request->get('narration');
        $time=Carbon::now();
        $time=(string)$time;
        $trdate=Carbon::today();
        $trdate=(string)$trdate;
        $userno=session()->get('logininfo.UserNo');
        $compid=session()->get('logininfo.CompId');
        $username=session()->get('logininfo.UserName');
        
        $vrno=Vouchers::max('VNo')+1;
        $values=array('VType'=>'JV','CompId'=>$compid,'VNo'=>$vrno,'Date'=>$date,'Narration'=>$narration,'DebitAcc'=>$debitpartyno,'CreditAcc'=>$creditpartyno,'Amount'=>$amount,'USERID'=>$userno,'TrDate'=>$trdate,'TrTime'=>$time,'EmpId'=>$userno);
        $debit=array('InvType'=>'JV','InvNo'=>$vrno,'CompId'=>$compid,'Date'=>$date,'Narration'=>$narration,'AccNo'=>$debitpartyno,'Debit'=>$amount,'Credit'=>'0','USERID'=>$username,'TrDate'=>$trdate,'TrTime'=>$time);
        $credit=array('InvType'=>'JV','InvNo'=>$vrno,'CompId'=>$compid,'Date'=>$date,'Narration'=>$narration,'AccNo'=>$creditpartyno,'Debit'=>'0','Credit'=>$amount,'USERID'=>$username,'TrDate'=>$trdate,'TrTime'=>$time);
        Vouchers::insert($values);
        Ledger::insert($debit);
        Ledger::insert($credit);
        $debitdata=null;
        $creditdata=null;
        $creditparty=session()->pull('creditparty');
        $debitparty=session()->pull('debitparty');
        $partydata=parties::all();
        return view('JournalVoucher',compact('creditparty','debitparty','debitdata','creditdata','vrno','partydata'));

    }
}
