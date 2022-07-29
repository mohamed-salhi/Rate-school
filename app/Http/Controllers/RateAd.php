<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RateAd extends Controller
{
    public function ad()
    {
        return view('ad.index');
    }
    public function se()
    {
        return view('se.index');
    }

    public function ratead(request $request)
    {
        $request->validate([
            'Arbic' => 'integer|max:150|min:0',
            'Einglish' => 'integer|max:150|min:0',
            'Match' => 'integer|max:100|min:0',
            'religion' => 'integer|max:100|min:0',
            'history' => 'integer|max:100|min:0',
            'Culture' => 'integer|max:100|min:0',
            'geography' => 'integer|max:100|min:0',
            'tec' => 'integer|max:100|min:0',

        ]);
        $main = $request->Arbic + $request->Einglish + $request->Match + $request->history;
        $arr = [
            $request->Culture,
            $request->geography,
            $request->tec,
            $request->religion,
        ];
        rsort($arr);
        $n1 = $arr[0];
        $n2 = $arr[1];

//        for ($i = 0; $i < 2; $i++) {
//            if ($arr[$i] == $request->religion)
//                if ($i == 0)
//                    $n1 = $arr[$i];
//                else
//                    $n2 = $arr[$i];
//
//            elseif ($arr[$i] == $request->Culture)
//                if ($i == 0)
//                    $n1 = $arr[$i];
//                else
//                    $n2 = $arr[$i];
//
//            elseif
//            ($arr[$i] == $request->geography)
//                if ($i == 0)
//                    $n1 = $arr[$i];
//                else
//                    $n2 = $arr[$i];
//
//            elseif ($arr[$i] == $request->tec)
//                if ($i == 0)
//                    $n1 = $arr[$i];
//                else
//                    $n2 = $arr[$i];
//        }


        $all = $main + $n1 + $n2;
        $rate = $all / 7;


     $array=[
         'عربي'=>$request->Arbic,
         'انجليزي'=>$request->Einglish,
         'رياضيات'=>$request->Match,
         'تاريخ'=>$request->history,
         'دين'=>$request->religion,
         'جغرافيا'=>$request->geography,
         'ثقافة'=>$request->Culture,
         'تنكنولوجيا'=> $request->tec,

     ];


      return view('ad.show',compact('array','rate'));


    }
    public function ratese(request $request)
    {
        $request->validate([
            'Arbic' => 'integer|max:100|min:0',
            'Einglish' => 'integer|max:100|min:0',
            'Match' => 'integer|max:200|min:0',
            'religion' => 'integer|max:100|min:0',
            'fe' => 'integer|max:100|min:0',
            'ah' => 'integer|max:100|min:0',
            'ke' => 'integer|max:100|min:0',
            'tec' => 'integer|max:100|min:0',

        ]);
        $main = $request->Arbic + $request->Einglish + $request->Match + $request->fe;
        $arr = [
            $request->ah,
            $request->ke,
            $request->tec,
            $request->religion,
        ];
        rsort($arr);
        $n1 = $arr[0];
        $n2 = $arr[1];

        $all = $main + $n1 + $n2;
        $rate = $all / 7;


        $array=[
            'عربي'=>$request->Arbic,
            'انجليزي'=>$request->Einglish,
            'رياضيات'=>$request->Match,
            'فيزياء'=>$request->fe,
            'دين'=>$request->religion,
            'احياء'=>$request->ah,
            'كيمياء'=>$request->ke,
            'تنكنولوجيا'=> $request->tec,

        ];


        return view('se.show',compact('array','rate'));


    }


}
