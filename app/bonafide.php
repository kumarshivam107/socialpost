<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class bonafide extends Model
{
    //Total Admission:-
    public function total_admission(){
        $user_id = Auth::user()->id;
        $total_admission = $this->where(['user_id'=>$user_id])->count();
        return $total_admission;
    }

    //Admission Approve:-
    public function admission_approve(){
        $user_id = Auth::user()->id;
        $approve_admission = $this->where(['user_id'=>$user_id,'status'=>1])->count();
        return $approve_admission;
    }

    //Excepted Earning:-
    public function expected_earning(){
        $user_id = Auth::user()->id;
        $expected_earning = $this->where(['user_id'=>$user_id,'status'=>1])->sum('commission');
        return $expected_earning;
    }

    //pending Admission:-
    public function pending_admission(){
        $user_id = Auth::user()->id;
        $pending_admission = $this->where(['user_id'=>$user_id,'status'=>0])->count();
        return $pending_admission;
    }
}
