@extends('layout')


@section('content')

<header class="jumbotron">
        <div class="container">
            <div class="row row-header">
                
                <div class=" col-2 align-self-center imgc">
                    <img src="img/logo.png" class="img-fluid">
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

<section class="pt-5">
<div class="container">
    
        <div class="row">

            <div class="col-md-8 offset-md-2">

                <div class="row">
                    <div class="col-md-10 offset-md-1">
                            
                <form action="" style="border:#5d4988 solid 1px; "  class="p-5">

<div class="row">
    <div class="col-sm-4" >
    <label style="font-size:1.1rem; ">විභාගය</label>
    </div>

    <div class="col-sm-8">
    <select class="form-control form-control-md shadow-none" id="examName"  name="clinicName">
     
      

      @foreach($exams as $exam)
        <option {{ $exam->id == $last_exam->id ? 'selected' : '' }} value="{{$exam->id}}"> {{$exam->exam_name}}-{{$exam->year}}</option>

      @endforeach
      
     </select>
    </div>

</div>


<div class="row mt-3">
    <div class="col-sm-4" >
    <label style="font-size:1.1rem">ඇතුලත් වීමේ අංකය</label>
    </div>

    <div class="col-sm-8">
    <input type="text" class="form-control  form-control-md shadow-none" id="inputCity">
    <small class="form-text invalid-feedback">this field must be filled
                     </small>
    </div>

</div>

<div class="text-center">



<button type="submit" class="btn btn-primary" id="resubmit" style="margin-top:30px">Search results</button>

</div>

</form>

                    </div>

                </div>

            
            </div>
        
        </div>


        <div class="row">
       
            <div class="col-md-10 pt-5 offset-md-1">

            <div id="mark">
            <p id ='p1'> </p>
           
            <table class="table table-dark" style="display:{{$display}}" id="mtable">


            
</table>



</div>
            </div>


            
            
         
        </div>


        
    
    
</div>

</section>





@stop