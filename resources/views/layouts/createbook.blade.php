@extends('layouts.master')
@section('upper-8')

<form action="{{ route('newBook') }}" method="POST">
	{!! csrf_field() !!}
	<input type="text" name="name"> Name
	<button type="submit"></button>
</form>

@endsection