<?php

use App\Models\Item;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;





if (!function_exists('getCurrency')) {
    function getCurrency($code=null)
    {

        $arr= [
            ['code'=>978,'title'=>'EUR'],
            ['code'=>840,'title'=>'USD'],
            ['code'=>400,'title'=>'JOD']];
        if($code==null){
            return $arr;
        }else{
            foreach ($arr as $item){
                if($item['code']==$code){
                    return $item;
                }
            }
        }

    }
}


if (!function_exists('get5Digit')) {
    function get5Digit()
    {
        $maxNumber = DB::table('items')->max('unique_number');
        $uniqueNumber = ($maxNumber ?? 9999) + 1;
       // $uniqueNumber = null;
       /* do {
            $uniqueNumber = mt_rand(10000, 99999);
        } while (Item::where('unique_number', $uniqueNumber)->exists());*/
        $item = new Item;
        $item->unique_number = $uniqueNumber;
        $item->save();
        return $uniqueNumber;

    }
}
