<button class="uni-book-layer uni-no-button" onclick="location.href = 'book/show/{{$id}}';" style="max-height:300px; display: inline-block; width:100%; padding-right:5px; padding-left:5px;">
	<div class="row-fluid">
	<div class="col-md-2 col-xs-2" align="left" style="margin-right:6px;">
		<img src="http://img.libraccio.it/images/9788820058708_0_500_0_75.jpg" class="img-responsive img-thumbnail" style="max-width:100%; min-width:55px;">
	</div>

	<!-- HIDDEN {List usage only} -->
	<div class="b_code hidden b_code">{{$product_code}}</div>
	<div class="hidden authors">{{$authors}}</div>
	<!-- HIDDEN {List usage only} -->

	<div class="container col-md-7 col-xs-7">
		<div class="row-fluid">
			<div class="uni-title name truncate" style="font-size:18px;" align="left">{{ $name }}</div>
		</div>
		<div class="row-fluid">
			<div class="uni-subtitle description truncate" style="font-size:14px;" align="left">{{ $description }}</div>
		</div>
		<!-- OLD SHIT
		<div class="row-fluid">
		    @if($kStatus == "kStatusNew")
		    <?php $status = "Nuovo"; ?>
		    @elseif($kStatus == "kStatusGood")
		    <?php $status = "Buono stato" ?>
		    @elseif($kStatus == "kStatusBad")
		    <?php $status = "Usurato"; ?>
		    @else
		    <?php $status = "Errore." ?>
		    @endif

			<label class="pull-right" style="margin-top:56px; margin-right:2px;">
			<span class="uni-label" style="margin-right:2px;"> {{ $status }} </span> 
			<span class="uni-label price" style="margin-right:2px;">$ {{ $price }} </span>
			</label>
		</div>
		-->
	</div>
	<!-- NEW SHIT -->
	</div>
      <label class="pull-right" style="margin-bottom:2px; margin-right:2px;">
      <span class="uni-label" style="margin-right:2px;"> {{ $status }} </span> 
      <span class="uni-label price" style="margin-right:2px;">$ {{ $price }} </span>
      </label>
</button>