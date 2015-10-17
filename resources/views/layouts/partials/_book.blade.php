<button class="uni-book-layer uni-no-button" onclick="location.href = 'book/show/{{$id}}';" style="max-height:300px; display: inline-block; width:100%; padding-right:5px; padding-left:5px;">
	<div class="row-fluid">
	<div class="col-md-2 col-xs-2" align="left" style="margin-right:6px;">
		<img src="https://pbs.twimg.com/profile_images/378800000822867536/3f5a00acf72df93528b6bb7cd0a4fd0c.jpeg" class="img-responsive img-thumbnail" style="max-width:100%; min-width:55px;">
	</div>

	<div class="b_code hidden">{{$product_code}}</div>
	
	<div class="col-md-8 col-xs-8 align-left">
		<div class="row-fluid">
			<div class="uni-title name truncate" style="font-size:18px;" align="left">{{ $name }}</div>
		</div>
		<div class="row-fluid">
			<div class="uni-subtitle description truncate" style="font-size:14px;" align="left">{{ $description }}</div>
		</div>
	</div>
		<div class="col-md-8 col-md-push-2" align="right" style="">

		    @if($kStatus == "kStatusNew")
		    <?php $status = "Nuovo"; ?>
		    @elseif($kStatus == "kStatusGood")
		    <?php $status = "Buono" ?>
		    @elseif($kStatus == "kStatusBad")
		    <?php $status = "Usurato"; ?>
		    @else
		    <?php $status = "Errore." ?>
		    @endif

			<label style="margin-top:16px;"><span class="uni-label" style="margin-right:2px;"> {{ $status }} </span> <span class="uni-label" style="margin-right:2px;">$ {{ $price }} </span></label>
		</div>	

	</div>
</button>