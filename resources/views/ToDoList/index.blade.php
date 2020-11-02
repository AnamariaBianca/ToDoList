@extends('todolist.layout')
@section('content')
<div>
	        <h1 class="text-2xl">To do list</h1>
	        <a href="/todolist/create" class="mx-5 py-1 px-1 bg-blue-400 cursor-pointer rounded text-white"> Create new task</a>

</div>
		        <ul class="m-5">
		        	<x-alert/>
			@foreach($todos as $todo)

			<li class="mx-5 py-2 px-2">
				<p> {{$todo->title}}
				<a href="{{'/todolist/'.$todo->id.'/edit'}}" class="mx-5 py-1 px-1 bg-yellow-400 cursor-pointer rounded text-white">Edit</a>
				</p>
				

			</li>
			@endforeach
		</ul>
@endsection





