<?php

namespace App\Http\Controllers;
use App\Models\CatageryTwo;
use App\Models\MainCata;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class SecandCatagery extends Controller
{
    // 2nd Catagery 

    public function catatwo(){

        $cat = MainCata::all();

        return view('dashboardviews.addcatagroy.addcata',compact('cat'));
    }


    function catatwostore(Request $req){
       
        $req->validate([

            'mcata' => 'required |max:25',
            'cat' => 'required',
    
        ]);

        $ins = new CatageryTwo;
        $ins-> Subcata_Name = $req['mcata'];
        $ins-> Mcata_Id = $req['cat'];
    
        $ins ->save();
    
        return redirect('/dashboard/catagery/list');
    }

    public function list(){

        $fatch = DB::select("SELECT * from catagery_twos INNER JOIN main_catas ON catagery_twos.Mcata_Id = main_catas.Mcata_Id ");
        
        return view('dashboardviews.addcatagroy.listcata',compact('fatch'));

    }


    public function scata_delete($id)
    {
       $del = CatageryTwo::find($id);
       $del->delete();
       return redirect('/dashboard/catagery/list');
    }

    // 2nd Catagery 
}
