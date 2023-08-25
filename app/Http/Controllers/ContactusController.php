<?php

namespace App\Http\Controllers;
use App\Models\Contactus;
use Illuminate\Http\Request;

class ContactusController extends Controller
{
    public function contactus(){
        return view('contact');
    }

    

    function store(Request $req){
       
        $req->validate([

            'name' => 'required |max:30',
            'email' => 'required | email',
            'massages' => 'required |max:80',
    
        ]);

        $ins = new contactus;
        $ins-> Name = $req['name'];
        $ins-> Email =$req['email'];
        $ins-> Massage =$req['massages'];
    
        $ins ->save();
    
        Print "Your massage has been submitted, thank you!";
    }


    public function list(){

        $fetch = Contactus::all();


        return view('dashboardviews.contact.massages')->with('fetch',$fetch);
    }

    public function msg_delete($id)
    {
       $del = Contactus::find($id);
       $del->delete();
       return redirect('/dashobard/massages');
    }
}
