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
<body>

<header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                
                <div class=" col-2 align-self-center imgc">
                    <img src="/img/logo.png" class="img-fluid">
                </div>

                <div class="col-10  align-self-center des">
                <h3 >විද්‍යාදර්ශ මහ විද්‍යාලය</h3>
                <h5 >විභාග ප්‍රතිඵල</h5>
                </div>
                <!-- <div class="col-sm-2 align-self-center">
                	<a id="reserve" class="btn btn-sm btn-block btn-warning">Reserve Table</a>                	
                </div>  -->
            </div>
        </div>
    </header>

    <div class="container">

    <h3>{{$exam->exam_name}}</h3>
    <h4>{{$grade->grade_name}}</h4>
    <h5>{{$subject->subject_name}}</h5>
<table class="table table-dark table-striped" style="" id="mtable">


<thead>
<tr>
<th scope="col">#</th>
<th scope="col">Index Number</th>
<th scope="col">marks</th>

</tr>
</thead>
<tbody>


@foreach($marks as $marks)
<tr>
<th scope="row">{{$count++}}</th>
<td>{{$marks->index_no}}</td>
<td>{{$marks->marks}}</td>

</tr>

@endforeach




</tbody>

</table>
</div>
</body>
</html>




 


