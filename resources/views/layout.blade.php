<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
    <script src="{{ asset('js/app.js') }}" ></script>

    
    @include('markjs') 
    @include('ourjs')

    @include('rejs')

    

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('fontawesome-free-5.15.1-web/css/all.min.css')}}" rel="stylesheet">

</head>
<body id="" >

    
 <!-- <section id="section1">
    <div class="row">
        <div class="col-12 head">
            <div class="container">
            <div class="row">
                <div class="col-3">
                    <div class="logo ">
                    <img src="./img/logo.png" alt="" class="" style="-left:40px">
                    </div>
                    
                </div>
                <div class="col-6">
                <div class="hi">
            <h3 >Vidyasarsha college</h3>
                <h5 >Examination results</h5>
            </div>
                </div>

            </div>
            
                
            </div>
            
        </div>
    
    </div>
    
    </section> -->

    
    @yield('content')
</body>
</html>