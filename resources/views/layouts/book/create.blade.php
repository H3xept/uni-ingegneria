@extends('layouts.master')

@section('upper-8')

<form method="POST" action="{{route('book.store')}}">
{!! csrf_field() !!}
<div class="row-fluid">

	<div class="col-md-5 col-xs-5" style="margin-bottom:8px;">

	<!-- TEMP STATIC IMAGE -->

		<img src="{{asset('http://bit.ly/1LsJbGJ')}}" class="img-responsive img-thumbnail" alt="Responsive image" style="max-height:360px;">
	
	<!-- ## -->

	</div>

	<div class="col-md-7">
	<address>
		<input type="text" class="form-control uni-textbox" placeholder="Nome completo" name="name">
		<textarea type="text" class="form-control uni-textbox" placeholder="Autori" rows="2" style="resize:none;" maxlength="255" name="authors" id="authors"></textarea>
		<input type="text" class="form-control uni-textbox" placeholder="Codice libro" name="product_code">
		<textarea type="text" class="form-control uni-textbox" placeholder="Descrizione" rows="6" style="resize:none;" maxlength="500" name="description"></textarea>
	    <input type="text" class="form-control input-sm uni-textbox" id="price" placeholder="Prezzo Es. 4,20" name="price">
		<div class="radio-inline">
		  <label>
		    <input type="radio" name="kStatus" id="kStatusNew" value="kStatusNew" checked>
		    Nuovo
		  </label>
		</div>
		<div class="radio-inline">
		  <label>
		    <input type="radio" name="kStatus" id="kStatusNew" value="kStatusNew">
		    Buono stato
		  </label>
		</div>
		<div class="radio-inline">
		  <label>
		    <input type="radio" name="kStatus" id="kStatusBad" value="kStatusBad">
		    Usurato
		  </label>
		</div>
	</address>
	  <div class="form-group form-inline pull-right">
	    <button class="uni-button">Invia</button>
	  </div>
		
	</div>
</div>

<div class="row-fluid">
	
</div>


</form>

@endsection