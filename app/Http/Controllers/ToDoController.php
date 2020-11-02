<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDo;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\TodoCreateRequest;


class ToDoController extends Controller
{
    public function index()
    {
    	$todos= Todo::all();
    	
    	return view('todolist.index',compact('todos'));
    }

     public function create()
    {
    	return view('todolist.create');
    }
      public function store(TodoCreateRequest $request)

     {

    	/*if(!$request->title){
    		return redirect()->back()->with('error','Insert task!');
    	}*/
    	 // $request->validate([
    		// 'title'=>'required|max:255',

    	 //  ]);
     	//  $rules=[
     	//  	'title'=>'required|max:255',
     	//  ];
     	//  $messages=[
     	//  	'Title.max'=>'Task title should not be greater than 255 chars.',
     	//  ];
     	//  $validator=Validator::make($request->all(),$rules,$messages);
     	//  if($validator->fails()){
     	//  	return redirect()->back()
     	//  	->withErrors($validator)
     	//  	->withInput();
    	 // } ---------------NU MAI AVEM NEVOIE DE PARTEA ASTA
     	ToDo::create($request->all());
     	return redirect()->back()->with ('message', 'Task Created Succesfully');
     }

    public function edit(ToDo $todo)
    {
         
    	return view('todolist.edit',compact('todo'));
    }


    public function update(Request $request, ToDo $todo)
    {
        $todo->update(['title'=> $request->title]);
        return redirect()->back()->with('message','Updated');
    }


}
