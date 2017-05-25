@extends('layouts.app')

@section('content')
<form method="POST" action="/users">
{{csrf_field()}}
	<label>name</label>
	<input type="name" name="name">
	<label>email</label>
	<input type="email" name="email">
	<label>password</label>
	<input type="password" name="password">
	<label>contact</label>
	<input type="phone" name="contact">
	<button type="submit" >submit
	</button>
	</form>

</form> 