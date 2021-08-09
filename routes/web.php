<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LedgerController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ProductSearchController;
use App\Http\Controllers\ProductHistoryController;
use App\Http\Controllers\PartiesController;
use App\Http\Controllers\VoucherController;
use App\Http\Controllers\DashboardController;
use App\Models\Parties;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Ledger', function () {
    $partyno=session()->get('logininfo');
    $partyname=Parties::all()->sortBy('PartyName');
    $data=null;
    $data1=null;
    $msg="NO RECORDS TO DISPLAY";
    return view('Ledger',compact('partyno','data','msg','data1','partyname'));
});
Route::get('/main', function () {
    $partyno=session()->get('logininfo');
    if($partyno){
    return view('main',compact('partyno'));
    }
    return view('Welcome');
});
Route::get('/Price', function () {
    $result=null;
    if((session()->get('logininfo.Type'))=="Admin"){
    return view('Products',compact('result'));
    }
    else{
        return view('welcome');
    }
});
Route::get('/History', function () {
    $result=null;
    $result2=null;
    if((session()->get('logininfo.Type'))=="Admin"){
    return view('History',compact('result','result2'));
    }
    else{
        return view('welcome');
    }
});
Route::get('/CashPayment', function () {
    $party=Parties::where('PartyNo',1001)->first();
    $data=null;
    $partydata=parties::all();
    $vrno=null;
    if((session()->get('logininfo.Type'))=="Admin" || (session()->get('logininfo.Type'))=="User" ){
    return view('CashPayment',compact('party','data','partydata','vrno'));
    }
    else{
        return view('welcome');
    }
});
Route::get('/CashReceive', function () {
    $party=Parties::where('PartyNo',1001)->first();
    $partydata=Parties::all();
    $data=null;
    $vrno=null;
    if((session()->get('logininfo.Type'))=="Admin" || (session()->get('logininfo.Type'))=="User" ){
    return view('CashReceive',compact('party','data','partydata','vrno','partydata'));
    }
    else{
        return view('welcome');
    }
});
Route::get('/JournalVoucher', function () {
    $debitdata=null;
    $creditdata=null;
    $vrno=null;
    $partydata=parties::all();
    $creditparty=session()->get('creditparty');
    $debitparty=session()->get('debitparty');
    if((session()->get('logininfo.Type'))=="Admin" ){
    return view('JournalVoucher',compact('creditparty','debitparty','debitdata','creditdata','vrno','partydata'));
    }
    else{
        return view('welcome');
    }
});
Route::any('/login',[LoginController::class,'login']);
Route::get('/signout',[LoginController::class,'signout']);
Route::get('/data',[LedgerController::class,'data']);
Route::get('/product',[ItemController::class,'item']);
Route::get('/search',[ItemController::class,'search']);
Route::get('/prodsearch',[ProductSearchController::class,'search']);
Route::get('/history',[ProductHistoryController::class,'history']);
Route::get('/paymentpartysearch',[PartiesController::class,'PaymentPartySearch']);
Route::get('/receivepartysearch',[PartiesController::class,'ReceivePartySearch']);
Route::get('/selectreceiveparty',[PartiesController::class,'SelectReceiveParty']);
Route::get('/selectpaymentparty',[PartiesController::class,'SelectPaymentParty']);
Route::get('/journalcreditparty',[PartiesController::class,'journalCreditPartySearch']);
Route::get('/journaldebitparty',[PartiesController::class,'journalDebitPartySearch']);
Route::get('/selectjournaldebitparty',[PartiesController::class,'selectJournalDebitParty']);
Route::get('/selectjournalcreditparty',[PartiesController::class,'selectJournalCreditParty']);
Route::post('/cashpaymentvoucher',[VoucherController::class,'cashPaymentVoucher']);
Route::post('/cashreceivevoucher',[VoucherController::class,'cashReceiveVoucher']);
Route::post('/journalvoucher',[VoucherController::class,'journalVoucher']);
Route::get('/recovery',[DashboardController::class,'recovery']);
Route::get('/userperformance',[DashboardController::class,'searchrecovery']);