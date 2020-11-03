@extends('todolist.layout')
@section('content')
<div class="flex justify-center border-b pb-4">
	        <h1 class="text-2xl">To do list</h1>
	        <a href="/todolist/create" class="mx-5 py-1 px-1 bg-blue-400 cursor-pointer rounded text-white"> Create new task</a>

</div>
		        <ul class="my-5">
		        	<x-alert/>
			@foreach($todos as $todo)

			<li class="flex justify-between p-2">
				<p> {{$todo->title}}</p>
				<div>
					
					<a href="{{'/todolist/'.$todo->id.'/edit'}}" class="text-yellow-400 cursor-pointer  text-white"><span class="fas fa-edit px-2"></a>
						@if($todo->completed)
						<span class="fas fa-check text-green-500 cursor-pointer px-2" onclick="event.preventDefault(); document.getElementById('form-incomplete-{{$todo->id}}').submit()"/>
							<form style="display:none" id="{{'form-incomplete-'.$todo->id}}" method="post" action="{{route('todo.incomplete',$todo->id)}}">
						@csrf
						@method('delete')
					</form>


						@else
					

						<span onclick="event.preventDefault(); document.getElementById('form-complete-{{$todo->id}}').submit()" class="fas fa-check text-gray-400 px-2 cursor-pointer px-2" />
							<form style="display:none" id="{{'form-complete-'.$todo->id}}" method="post" action="{{route('todo.complete',$todo->id)}}">
						@csrf
						@method('put')
					</form>
							@endif
					<!-- <span class="fas fa-trash text-red-400 px-2 cursor-pointer" onclick="event.preventDefault(); document.getElementById('form-delete-{{$todo->id}}').submit()"/>
					<form style="display:none" id="{{'form-delete-'.$todo->id}}" method="post" action="{{route('todo.delete',$todo->id)}}">
						@csrf
						@method('delete') -->
					</form>
				</div>
				
				
				

			</li>
			@endforeach
		</ul>
@endsection





