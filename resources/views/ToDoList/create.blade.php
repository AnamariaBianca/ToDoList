@extends('todolist.layout')
@section('content')
<h1 class="text-2xl">To do list</h1>
        <x-alert />
        <form method="post" action="/todolist/create" class="py-5">
            @csrf
            <input type="text" name="title" class="py-2 px-2 border rounded"/>
            <input type="submit" value="Create" class ="p-1 border rounded-lg"/>
        </form>
@endsection
