@extends('layouts.master')
@section('upper-8')

<div class="row-fluid">

	<div class="col-md-5">

	<!-- TEMP STATIC IMAGE -->

		<img src="{{asset('https://pbs.twimg.com/profile_images/378800000822867536/3f5a00acf72df93528b6bb7cd0a4fd0c.jpeg')}}" class="img-responsive img-thumbnail" alt="Responsive image" style="max-height:360px">
	
	<!-- ## -->

	</div>

	<div class="col-md-7">
	    
	    <div class="uni-title">{{$book->name}}</div>
		<address class="uni-form">
			<div class="uni-subtitle"><u>Autori</u><br>

			<!-- TEMP STATIC -->
				<small style="color: #5A5430;">{{$book->authors}}</small>
			<!-- ########### -->

			</div>

			<!-- NEH 
			<div class="uni-subtitle" style="padding-bottom:6px;">Modalità di consegna</div>

			<label class="uni-label">LOL</label>

			-->

			<div class="uni-subtitle" style="padding-bottom:6px; padding-top:6px;"><u>Contatti</u></div>
			@if($book->owner->t_number != "")
				<label class="uni-label">
					<i class="fa fa-phone-square"></i> {{ $book->owner->t_number }}
				</label>
			@endif
				<label class="uni-label">
					<i class="fa fa-envelope"> </i> {{ $book->owner->email }}
				</label>

			<div class="uni-subtitle" style="padding-top:6px; padding-bottom:6px;"><u>Prezzo</u></div>
		    <label for="" class="uni-label"><i class="fa fa-eur"></i> {{ $book->price }}</label>

		</address>

	</div>

</div>

<div class="row-fluid">
	<div class="col-md-5" style="padding-bottom:8px;">

	    <div class="input-group" style="padding-top:8px;">
	    <div class="input-group-addon">Stato</div>
	    @if($book->kStatus == "kStatusGood")
	    <?php $status = "Buono"; ?>
	    @else
	    <?php $status = "Usurato"; ?>
	    @endif
	        <input value="{{$status}}" class="form-control" style="background-color:white;" readonly>
	    </div>

	</div>
	<div class="col-md-7" style="padding-bottom:8px;">
	    <div class="input-group" style="padding-top:8px;">
	    <div class="input-group-addon">Codice Libro</div>
	    @if($book->product_code == "")
	    <?php $b_code = "Non disponibile" ?>
	    @else
	    <?php $b_code = $book->product_code ?>
	    @endif
	        <input value="{{$b_code}}" class="form-control" style="background-color:white;" readonly>
	    </div>
	</div>
</div>

<div class="row-fluid">
	<div class="col-md-12">
		<div class="uni-subtitle" style="padding-bottom:6px; padding-top:12px;"><u>Descrizione</u></div>
		<div>
			<p style="word-wrap: break-word;">{{ $book->description }}</p>
		</div>
	</div>
</div>

</div>

@endsection

@section('login-user')

<div class="row-fluid">

</div>

@endsection