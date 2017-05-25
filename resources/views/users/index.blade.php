@extends('layouts.app')

@section('content')

<div class="container">

	<a href="/users/create"  class="btn btn-primary">Create User</a>
	<div class="invisible">&nbsp;</div>
	<div class="panel panel-default">

		<div class="panel-heading">
		Current Users
		 <div class="w3-bar">
  <a href="/users?page=1" class="w3-button">1</a>
  <a href="/users?page=2" class="w3-button">2</a>
  <a href="/users?page=3" class="w3-button">3</a>
  <a href="/users?page=4" class="w3-button">4</a>
  <a href="/users?page=5" class="w3-button">5</a>
</div> 
		</div>

		<div class="panel-body">
		<div class="col-sm-12">

		<table class="table table-striped">
	  		<thead>
		  		<th>Id</th>
		  		<th>Name</th>
		  		<th>Email</th>
		  		<th>Contact</th>
		  		<th>Edit</th>
		  		<th>Show</th>
		  		<th>Delete</th>
	  		</thead>
	  		@foreach($users as $user)
	  		<tbody>
	  		
	  		<tr><td>{{$user->id}}</td>
	  		<td>{{$user->name}}</td>
	  		<td>{{$user->email}}</td>
	  		<td>{{$user->phone}}</td>
	  		
	  		<td><a href= "{{ url('/users/'.$user->id.'/edit' ) }}"  class="btn btn-warning">Edit</a></td>
	  		<td><a href= "{{ url('/users/'.$user->id) }}"  class="btn btn-primary">Show</a></td>
	  		<td><form action="/users/{{ $user->id }}" method="POST">
                   	{{ csrf_field() }}
                   	{{ method_field('DELETE') }}
                   <button type="submit"  onclick="return confirm('Are you sure you want to delete this item?');" id="delete-page-{{ $user->id }}" class="btn btn-danger">
                   <i class="fa fa-btn fa-trash"></i> Delete</button>
                 	</form>

	  		</td></tr>
	  		
	  		</tbody>
	  		@endforeach
		</table>
		
		</div>
		</div>

	</div>

</div>



@endsection