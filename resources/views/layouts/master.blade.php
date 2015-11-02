<!DOCTYPE html>
<html>
    <head>
        <title>Uni Pg Libri</title>
        <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/bootstrap-theme.min.css')}}" rel="stylesheet">
        <link href="{{ asset('css/uni.css')}}" rel="stylesheet">
        <script src="{{ asset('bower_components/list.js/dist/list.min.js') }}"></script>
        <script src="{{ asset('bower_components/list.fuzzysearch.js/dist/list.fuzzysearch.min.js') }}"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    </head>
    <body>

        <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand brand" href="#">Uni pg</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><i id="home_btn" class="fa fa-home "> Home </i></a></li>
            <li><a href="#about"><i  id="user_btn"class="fa fa-user "> Profilo</i></a></li>
          </ul>
        </div>
        </div>
        </nav>
        
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-push-8">
                    @if(Auth::guest())
                      @include('auth.partials._login')
                    @else @include('layouts.partials._small_profile')
                    @endif
                </div>
                <div class="col-md-8 col-md-pull-4" style="backogrund-color:blue;">
                    @yield('upper-8')
                </div>
            </div>
        </div>

    </body>

    <script src="{{ url('//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

</html>
