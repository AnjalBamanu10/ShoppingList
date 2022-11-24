<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TshirtComp;

class TshirtCompController extends Controller
{
    public function index()
    {
        return view('welcome', ['batch'=> TshirtComp::all()]);
    }
   

    public function saveData(Request $req)
    {
        $tshirtObj = new TshirtComp();
        $tshirtObj-> Batch = $req-> batch;
        $tshirtObj-> Quantity = $req-> quantity; 
        $tshirtObj-> MFD = $req-> mfd; 
        $tshirtObj-> Status = $req-> status; 
        $tshirtObj-> Remarks = $req-> remarks; 


        $tshirtObj-> save();
        return redirect('/');
    }

    public function deleteData($id)
    {
        $data =  TshirtComp :: find($id);
        $data -> delete();
        return redirect('/');
    }
    public function editData($id)
    {
       $data =  TshirtComp :: find($id); 
       return view ('edit',['data'=> $data]);
    }
    public function updateData(Request $req)
    {
        $tshirtObj =  TshirtComp :: find ($req -> id);
        $tshirtObj-> Batch = $req-> batch;
        $tshirtObj-> Quantity = $req-> quantity; 
        $tshirtObj-> MFD = $req-> mfd; 
        $tshirtObj-> Status = $req-> status; 
        $tshirtObj-> Remarks = $req-> remarks; 
        $tshirtObj-> save();
        return redirect('/');

    }
}
