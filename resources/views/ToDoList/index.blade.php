@extends('todolist.layout')
@section('content')
<div class="flex justify-center border-b pb-4">
	        <h1 class="text-2xl">To do list</h1>
	        <a href="/todolist/create" class="mx-10 py-1 px-1 bg-blue-400 cursor-pointer rounded text-white"> Create new task</a>

</div>
    
<p>
                        
{{ $completed->count() }} Incompleted
                        
</p>
    
 
  

		        <ul class="my-5">
		        	<x-alert/>

			@foreach($todos as $todo)



			<li class="flex justify-between p-2">
				<div>

				@include('todolist.complete-button') 

			</div>
				@if($todo->completed)
				<p class="line-through">{{$todo->title}}</p>
				@else
				<p> {{$todo->title}}</p>
				@endif 

				
				
  				 @if ($todo->due_date > Carbon\Carbon::now())

  				 <p class="mx-5 rounded">Due date: {{$todo->due_date}}</p>
  				 @else
  				 <p style="color:#FF0000";>Due date: {{$todo->due_date}}</p>
  				 @endif
				
				
				
				<div>

					
					
					<a href="{{'/todolist/'.$todo->id.'/edit'}}" class="text-yellow-400 cursor-pointer  text-white"><span class="fas fa-edit px-2"></a>




					<span class="fas fa-trash text-red-400 px-2 cursor-pointer" onclick="event.preventDefault(); 
					if(confirm('Are you sure?')){
					document.getElementById('form-delete-{{$todo->id}}').submit()
				}"/>
					<form style="display:none" id="{{'form-delete-'.$todo->id}}" method="post" action="{{route('todo.delete',$todo->id)}}">
						@csrf
						@method('delete')
					</form>



					
				</div>
				
				

			</li>
			@endforeach
		</ul>
@endsection





