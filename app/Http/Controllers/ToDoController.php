<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDo;

class ToDoController extends Controller
{
    public function index()
    {
    	return view('todolist.index');
    }

     public function create()
    {
    	return view('todolist.create');
    }
     public function store(Request $request)
    {
    	
    	ToDo::create($request->all());
    	return redirect()->back()->with ('message', 'Task Created Succesfully');
    }

    public function edit()
    {
    	return view('todolist.edit');
    }


}
