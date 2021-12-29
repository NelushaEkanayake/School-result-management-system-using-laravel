@extends('successlogin')


@section('content')

<h3 class="text-muted  mb-3">Exam management</h3>
                <table class="table table-striped bg-light text-center table-hover" id="examtable">
                	<thead>
                		<tr>
                			<th colspan="3" class="text-left">Exam List</th>
                			<th class="text-right mr-3" colspan="3" ><button type="button" class="btn btn-primary btn-sm addexam"  data-toggle="modal" data-target="" id="AddSession"><i class="fas fa-plus"></i></button></th>
                		</tr>
                	</thead>




                  <thead>
                    <tr class="text-muted">
                      <th>Exam ID</th>
                      <th>Exam Name</th>
                      <th>Exam Year</th>
                      <th>Exam added on</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($exams as $exam)
                    <tr>
                      <th>{{$exam->id}}</th>
                      <td>{{$exam->exam_name}}</td>
                      <td>{{$exam->year}}</td>
                      <td>{{ \Carbon\Carbon::parse($exam->created_at)->format('d-m-Y')}}</td>
                      <td><button type="button" class="btn btn-warning btn-sm edit" id="{{$exam->id}}" >Edit</button></td>
                      <td><button type="button" class="btn btn-danger btn-sm delete" id="{{$exam->id}}">Delete</button></td>
                    </tr>

                    @endforeach
                    
                  </tbody>
                </table>
                
               
                
                

                
{!! $exams->links() !!}



  

    
    

    

    @stop  