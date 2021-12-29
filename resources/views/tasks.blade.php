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


    <section id="sec">
    <div class="hi" style="border-bottom:1px solid  #5d4988; ;  height:45px; margin-bottom:1rem;">
        <div class="container" >
        

        <div class="ml-auto" style="width:30%; height:45px; display:flex">
        <div class="text-center fbtn" style=" width:44%; margin-left:2px; margin-bottom:0.5rem;  padding-top:6px"><i class="fa fa-user" style="margin-right:9px" aria-hidden="true"></i><a href="/main" class="ml-auto jky" style="margin-top:10px">Admin Login</a></div>
        <div class="text-center fbtn" style=" width:56% ; margin-left:5px; margin-bottom:0.5rem;  padding-top:6px"><i class="fa fa-trophy"  style="margin-right:9px" aria-hidden="true"></i><a href="/result" class="ml-auto jky">Check Your results</a></div>
        </div>

        
       
        </div>
        
        </div>
    
    </section>

    <section id="examrow">
        <div class="container">
        <div class="row">
            <div class="col-12">
            <div class="input-group mb-3">
  <div class="input-group-prepend">
    <label class="input-group-text" for="inputGroupSelect01">SELECT THE EXAMINATION</label>
  </div>
  <select class="custom-select shadow-none" id="inputGroupSelect01">
    
    @foreach($exams as $exam)
    <option {{ $exam->id == $last_exam->id ? 'selected' : '' }} value="{{$exam->id}}"> {{$exam->exam_name}} - {{$exam->year}}</option>
    
    @endforeach
  </select>
</div>

            </div>

        </div>
        </div>
    </section>

    <section id="section2">
        <div class="container">

            <div class="row">

                <div class="col-2">
                <hr class="new2">

                <div class="grade">
                    @foreach($grades as $grade)
                    <ul>
                        <li  ><a href=""  tabindex="0" id="{{$grade->id}}"  value="{{$grade->grade_name}}" class="subn {{ $grade->id == $grdr->id ? 'select' : '' }}"><i class='fas {{$grade->icon}}'></i>{{$grade->grade_name}}</a></li>

                    </ul>
                    @endforeach

                    

                </div>
                
                
                </div>

                <div class="col-10">
                <hr class="new2">

                

    
                
                <div class="subj">
                    <div class="row"  id="subjects">
                    
                    @foreach($subs as $d)
                        <div class="col-4">


                        <div class="card" >
  <img class="card-img-top  bimg" src="./img/{{$d->image}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text aling-middle" id="{{$d->id}}" value="{{$d->id}}"><a href=""    > {{$d->subject_name}}</a> </p>
  </div>
</div>

                            
                            
                        </div>
                        @endforeach
                    

                    </div>


                </div>

                


                </div>
            
            </div>
        
        </div>
    
    </section>

    
    

 @stop



    
    
    
