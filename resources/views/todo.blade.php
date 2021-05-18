@extends("layouts.app")
@section("content2")
<div class="container">
@if(session()->has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Done !!! </strong>}{{ session()->get('message') }}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
@endif
<div class="col-md-6">
<h4>Input tasks</h4>
<form method="POST" action={{url('/task')}}>
{{csrf_field()}}
<div class="form-group">
<input type="text" required class="form-control" name="task" placeholder="Task Title">
<textarea rows="2" cols="30" required class="form-control" name="details" placeholder="Task Details"></textarea>
</div>
<div class="form-group">
<button type="submit" class="btn btn-success">Add</button>
<button type="Reset" class="btn">Reset</button>
</div>
</form>
<hr>
<ol>
@foreach($tasks as $task)
<form method="PATCH" action={{url('/'.$task->id.'/update')}}>
<li><a href ={{url('/'.$task->id.'/complete')}}>{{ $task->task }}</a></li>
<textarea rows="1" cols="15" required class="form-control" name="details_u" placeholder="Task Details">
    {{$task->details}}
</textarea>
<button type="submit" class="btn btn-success">Update</button>
</form>
@endforeach
</ol>

<h4>Completed</h4>
<ol>
@foreach($completed_tasks as $c_task)
<li><a href ={{url('/'.$c_task->id.'/delete')}}>{{ $c_task->task }}</a></li>
@endforeach
</ol>
</div>
</div>
@endsection