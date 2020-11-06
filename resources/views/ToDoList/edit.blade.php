@extends('todolist.layout')

@section('content')

	<h1 class="text-2xl">Update task list</h1>

        <x-alert />
        <form method="post" action="{{route('todo.update',$todo->id)}}" class="py-5">
            @csrf
            @method('patch')
            <input type="text" name="title" value={{$todo->title}} class="py-2 px-2 border rounded"/>
            <input type="date" name="due_date" value=
            {{$todo->due_date}} class="py-2 px-2 border rounded"/>
            <input type="submit" value="Update" class ="p-1 border rounded-lg"/>
        </form>

        <a href="/todolist" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded text-black"> Back</a>

@endsection