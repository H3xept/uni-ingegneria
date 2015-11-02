@extends('layouts.master')
@section('upper-8')

<div class="row-fluid">

	<div class="col-md-5 col-xs-5">

	<!-- TEMP STATIC IMAGE -->

		<img src="{{asset('http://bit.ly/1LsJbGJ')}}" class="img-responsive img-thumbnail" alt="Responsive image" style="max-height:360px;">
	
	<!-- ## -->

	</div>

	<div class="col-md-7 col-sm-7 col-xs-12">
	    
	    <form action="{{route('user.update',$user->id)}}" method="POST">
	    {!! csrf_field() !!}
			<address class="uni-form">
		    <div class="input-group">
		    <div class="input-group-addon">Name</div>
		        <input value="{{$user->name}}" name="name" class="form-control" style="background-color:white;">
		    </div>
		    <div class="input-group" style="padding-top:8px;">
		    <div class="input-group-addon">Email</div>
		        <input value="{{$user->email}}" name="email" class="form-control" style="background-color:white;">
		    </div>
		    <div class="input-group" style="padding-top:8px;">
		    <div class="input-group-addon">Telefono</div>
		        <input value="{{$user->t_number}}" name="t_number" placeholder="..." class="form-control" style="background-color:white;">
		    </div>
		    <div class="input-group" style="padding-top:8px;">
		    <div class="input-group-addon">Nuova password</div>
		        <input type="password" placeholder="***" name="n_password" class="form-control" style="background-color:white;">
		    </div>
		    <div class="input-group" style="padding-top:8px;">
		    <div class="input-group-addon">Vecchia password</div>
		        <input type="password" placeholder="***" name="o_password" class="form-control" style="background-color:white;">
		    </div>
			</address>
			  <div class="form-group form-inline pull-right">
			    <button class="uni-button">Salva</button>
			  </div>
		  </form>
	</div>

</div>

</div>

@endsection

@section('login-user')

@endsection