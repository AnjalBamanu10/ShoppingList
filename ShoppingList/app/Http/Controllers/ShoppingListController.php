<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingList;

class ShoppingListController extends Controller
{
    public function index()
    {
        return view('welcome', ['list'=> ShoppingList::all()]);
    }
    public function delete($id)
    {
        $data = ShoppingList :: find($id);
        $data -> delete();
        return redirect('/');
    }
    public function edit($id)
    {
       $data = ShoppingList :: find($id); 
       return view ('edit',['data'=> $data]);
    }
    public function updateList(Request $req)
    {
        $shopObj = ShoppingList :: find ($req -> id);
        $shopObj->items = $req->list;
        $shopObj-> save();
        return redirect('/');

    }



    public function saveList(Request $req)
    {
        $shopObj = new ShoppingList();
        $shopObj-> items = $req->list;
        $shopObj-> save();
        return redirect('/');
    }
}
