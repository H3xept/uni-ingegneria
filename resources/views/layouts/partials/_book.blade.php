<button class="uni-book-layer container-fluid uni-no-button" onclick="location.href = 'book/show/{{$id}}';">
	<div class="row-fluid">
		<img src="https://pbs.twimg.com/profile_images/378800000822867536/3f5a00acf72df93528b6bb7cd0a4fd0c.jpeg" class="img-responsive img-thumbnail" style="max-height:180px;">
	</div>

	<div class="row" style="padding-top:4px;">
		<div class="col-md-12">
			<div class="uni-title name" style="font-size:18px;" align="left">{{ $name }}</div>
		</div>
	</div>

	<div class="row" style="padding-top:4px;">
		<div class="col-md-12 col-xs-12" align="right">

	    @if($kStatus == "kStatusGood")
	    <?php $status = "Buono"; ?>
	    @else
	    <?php $status = "Usurato"; ?>
	    @endif

			<label><span class="uni-label" style="margin-right:2px;"> {{ $status }} </span> <span class="uni-label" style="margin-right:2px;">$ {{ $price }} </span></label>
		</div>
	</div>
</button>