<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todoList;

class TodoController extends Controller
{
    public function index()
    {
        return view('welcome', ['list'=> todoList::all()]);
    }

    public function saveTodo(Request $req)
    {
        $todoObj = new todoList();
        $todoObj-> title = $req->todo;
        $todoObj-> save();
        return redirect('/');
    }
}
