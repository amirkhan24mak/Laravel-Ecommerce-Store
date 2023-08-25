<?php

namespace App\Http\Controllers;

use App\Models\MainCata;
use Illuminate\Http\Request;
use App\Models\CatageryTwo;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{

    
    // public function home(){

    //     $cataone = MainCata::where('Mcata_Id','8');
    //     $catatwo = MainCata::where('Mcata_Id','9');
    //     $catathree = MainCata::where('Mcata_Id','10');

    //     return view('welcome',compact('cataone','catatwo','catathree'));

    // }
    public function home(){
     
        $fetch = DB::select("SELECT * FROM `catagery_twos` WHERE Mcata_Id =8;");
        $fetchtwo = DB::select("SELECT * FROM `catagery_twos` WHERE Mcata_Id =9;");
        $fetchthree = DB::select("SELECT * FROM `catagery_twos` WHERE Mcata_Id =10;");
        return view('welcome',compact('fetch','fetchtwo','fetchthree'));

    }



}
