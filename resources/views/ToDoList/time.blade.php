<!-- @extends('todolist.layout')

@section('content')

<form method="post" action="{{route('todo.time',$todo->id)}}" class="py-5">
            @csrf
            @method('get')
            <input type="text" name="Date" value={{$todo->due_date}} class="py-2 px-2 border rounded"/>



<a href="/todolist" > Back</a>

@endsection -->

<!-- @extends('todolist.layout')
@section('content')
<h1 class="text-2xl">To do list</h1>
        <x-alert />
        <form method="post" action="/todolist/time" class="py-5">
            @csrf
            <input type="text" name="due_date" class="py-2 px-2 border rounded"/>
            <input type="submit" value="Add date" class ="p-1 border rounded-lg"/>
        </form>

        <a href="/todolist" class="m-5 py-1 px-1 bg-white-400 border cursor-pointer rounded text-black"> Back</a>
@endsection
 -->