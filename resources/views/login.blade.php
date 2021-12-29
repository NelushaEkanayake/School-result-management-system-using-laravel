@extends('layout')
@section('content')

<header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                
                <div class=" col-2 align-self-center imgc">
                    <img src="img/logo.png" class="img-fluid">
                </div>

                <div class="col-10  align-self-center des">
                <h3 >විද්‍යාදර්ශ මහා විද්‍යාලය</h3>
                <h5 >විභාග ප්‍රතිඵල</h5>
                </div>
                <!-- <div class="col-sm-2 align-self-center">
                	<a id="reserve" class="btn btn-sm btn-block btn-warning">Reserve Table</a>                	
                </div>  -->
            </div>
        </div>
    </header>
<section id="login" class="pt-5">

<div class="container box">
<h3 align="center"></h3>
 <br>
@if(isset(Auth::user()->email))
    <script>
        window.location="/main/successlogin";

    </script>
@endif


 @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert"></button>
        <strong>{{ $message }}</strong>
    </div>
 @endif
@if (count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    </div>
@endif
  
 <form method="post" action="{{ url('/main/checklogin') }}" >
    {{ csrf_field() }}
    <div class="form-group">
        <label for="">Email</label>
        <input type="email" name="email" class="form-control"/>

    </div>

    <div class="form-group">
        <label for="">Enter Password</label>
        <input type="password" name="password" class="form-control"/>

    </div>

    <div class="form-group text-center">
        
        <input type="submit" name="login" class="btn btn-primary text-center" value="Login" />

    </div>

 </form>
</div>

</section>

@stop