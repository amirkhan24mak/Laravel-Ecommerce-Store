<?php

namespace App\Http\Controllers;
use App\Models\MainCata;
use App\Models\CatageryTwo;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AllCatagery extends Controller
{

    // Main catagery

    public function addmaincata(){
        return view('dashboardviews.mainmenu.addcatagroy');
    }

    function store(Request $req){
       
        $req->validate([

            'mcata' => 'required |max:15',
    
        ]);

        $ins = new MainCata;
        $ins-> Name = $req['mcata'];
    
        $ins ->save();
    
        return redirect('/dashboard/maincatagery/list');
    }

    public function list(){

        $fetch = MainCata::all();

        return view('dashboardviews.mainmenu.listcatagery',compact('fetch'));

    }


    public function mcata_delete($id)
    {
       $del = MainCata::find($id);
       $del->delete();
       return redirect('/dashobard/massages');
    }
    
    // Main catagery

    
    

    
}
