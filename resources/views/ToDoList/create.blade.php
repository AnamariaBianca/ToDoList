@extends('todolist.layout')
@section('content')
<h1 class="text-2xl">To do list</h1>
        <x-alert />
        <form method="post" action="/todolist/create" class="py-5">
            @csrf
            <input type="text" name="title" class="py-2 px-2 border rounded"/>
            <input type="submit" value="Create" class ="p-1 border rounded-lg"/>
            <div class="mx-5 py-2 px-2 form-group">
        	<label>Due date</label>
        	<input type="date" name="due_date" class="form-control border rounded">
        </div>
        </form>



        


        <a href="/todolist" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded text-black"> Back</a>
@endsection
