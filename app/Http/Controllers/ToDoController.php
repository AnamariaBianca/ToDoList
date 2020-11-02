<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDo;
use Illuminate\Support\Facades\Validator;

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

    	/*if(!$request->title){
    		return redirect()->back()->with('error','Insert task!');
    	}*/
    	 // $request->validate([
    		// 'title'=>'required|max:255',

    	 //  ]);
     	 $rules=[
     	 	'title'=>'required|max:255',
     	 ];
     	 $messages=[
     	 	'Title.max'=>'Task title should not be greater than 255 chars.',
     	 ];
     	 $validator=Validator::make($request->all(),$rules,$messages);
     	 if($validator->fails()){
     	 	return redirect()->back()
     	 	->withErrors($validator)
     	 	->withInput();
    	 }
     	ToDo::create($request->all());
     	return redirect()->back()->with ('message', 'Task Created Succesfully');
     }

    public function edit()
    {
    	return view('todolist.edit');
    }


}
