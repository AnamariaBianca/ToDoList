<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDo;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\TodoCreateRequest;
use Carbon\Carbon;


class ToDoController extends Controller
{
    public function index()
    {
        $todos= Todo::all();
        $completed = $todos->where('completed', 0);
          return view('todolist.index',compact('todos','completed'));
  
    }

     public function create()
    {
    	return view('todolist.create');
    }
      public function store(TodoCreateRequest $request)

     {
        //dd($request->all());

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
// $request->validate([
            
//             'due_date'=>'required|date_format:Y-m-d',]);
        

        
     	return redirect()->back()->with ('message', 'Task Created Succesfully');
       
     }



    public function edit(ToDo $todo)
    {
         
    	return view('todolist.edit',compact('todo'));
    }


    public function update(TodoCreateRequest $request, ToDo $todo)
    {
        $todo->update(['title'=> $request->title]);
        $todo->update(['due_date'=> $request->due_date]);
        return redirect(route('todo.index'))->with('message','Updated');
    }

    public function complete(Todo $todo)
    {
        $todo->update(['completed'=>true]);
        return redirect()->back()->with('message', 'Task completed');
    }

    public function incomplete(Todo $todo)
    {
        $todo->update(['completed'=>false]);
        return redirect()->back()->with('message', 'Task incompleted');
    }


    public function delete(Todo $todo)
    {
        $todo->delete();
        return redirect()->back()->with('message', 'Task deleted');
    } 

  


}
