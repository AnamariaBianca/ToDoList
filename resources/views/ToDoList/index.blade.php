@extends('todolist.layout')
@section('content')
        <h1 class="text-2xl">To do list</h1>
		        <ul>
			@foreach($todos as $todo)

			<li>
				{{$todo->title}}

			</li>
			@endforeach
		</ul>
@endsection





