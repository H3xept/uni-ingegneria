<div class="uni-form" align="center" style="margin-bottom:16px;">
<form method="POST" action="{{ route('auth.postLogin') }}">
    {!! csrf_field() !!}
    
    <div align="left" style="padding-bottom:6px;">Login</div>

    <div class="input-group" style="margin-bottom:6px;">
        <input type="email" name="email" value="{{ old('email') }}" placeholder="email" class="form-control">
        <div class="input-group-addon">@</div>
    </div>
    
    <div class="input-group">
        <input type="password" name="password" id="password" class="form-control" placeholder="password">
        <div class="input-group-addon"><div class="glyphicon glyphicon-asterisk"></div></div>
    </div>

    <div class="row" style="margin-top:10px;">
        
        <div class="col-md-8" style="margin-top:2px; vertical-align:center;">
            <a style="align-left" href="#">Password ?</a>
        </div>

        <div class="col-md-4">
            <button type="submit" class="uni-button pull-right">Login</button>
        </div>
    </div>
    <!-- Hidden! -->
    <input type="checkbox" name="remember" class="hidden" checked>

</form>
</div>