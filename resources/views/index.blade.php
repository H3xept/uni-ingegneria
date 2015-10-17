@extends('layouts.master')

@section('upper-8')

<div id="list-id">
  <div class="container-fluid">
    <div class="uni-form">
      <div class="form-group form-group-lg">
          <input class="form-control fuzzy-search uni-search" type="text" id="search" placeholder="Ricerca per nome, codice, autori...">
      </div>
      <button class="sort uni-button" data-sort="price">
        Ordina per prezzo
      </button>
      </div>
  </div>

<div class="row-fluid" style="padding-top:36px;" style="background-color:red;">

  

  <div align="center">
    <ul class="list row-fluid" style="list-style-type:none; padding:0px; margin:0px;">
      @foreach($books as $book)
      <li class="col-md-12">
        {!! view('layouts.partials._book',$book)!!}
      </li>
      @endforeach
    </ul>
  </div>
</div>

</div>

<script>

var fuzzyOptions = {
  searchClass: "fuzzy-search",
  location: 0,
  distance: 100,
  threshold: 0.4,
    multiSearch: true
};
var options = {
  valueNames: ['name','b_code','authors','price'],
  plugins: [
    ListFuzzySearch()
  ]
};

var listObj = new List('list-id', options);

</script>

@endsection
