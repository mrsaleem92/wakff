<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\Transcation;
use Illuminate\Http\Request;

class BankController extends Controller
{
    //

  public function index(){
      $accounts = Account::where(['user_id'=>auth()->user()->id])->get();
      return view('dashboard',['accounts'=>$accounts]);
}


    public function account($id){
        $trans = Transcation::where(['account_id'=>$id])->get();
        return view('trans',['trans'=>$trans]);
    }


}
