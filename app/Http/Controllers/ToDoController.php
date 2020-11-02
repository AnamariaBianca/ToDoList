<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function edit()
    {
    	return view('todolist.edit');
    }
}
