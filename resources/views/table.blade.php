


<table class="table table-sm table-striped" style="" id="mtable">

<thead>
                		<tr>
                			<th colspan="2" class="text-left">{{$exam->exam_name}} - {{$exam->year}}</th>
                			<th class=" mr-3" colspan="1" >{{$name->student_name}}</th>
                		</tr>
                	</thead>
<thead>
<tr>
<th scope="col">#</th>
<th scope="col">subject</th>
<th scope="col">marks</th>

</tr>
</thead>
<tbody>


@foreach($results as $result)
<tr>
<th scope="row">{{$count++}}</th>
<td>{{$result->subject_name}}</td>
<td>{{$result->marks}}</td>

</tr>

@endforeach




</tbody>
</table>



 
