<script src="js/app.js"></script> 

<script>
    

$(document).ready(function(){

   


$("#subject").on("click", function(event){
    
    $.ajax({

type:'get',
dataType:'html',
url:'{{url('/examboard')}}',
data:{},
success:function(data){
  

   

  $("#hello").html(data);
  //alert('st');
}


});


});

$("#grades").on("click", function(event){
    
    $.ajax({

type:'get',
dataType:'html',
url:'{{url('/examboard')}}',
data:{},
success:function(data){
  

   

  $("#hello").html(data);
  //alert('st');
}


});


});

$("#NCAB").on("click", function(event){
  event.preventDefault();
  alert('hfd');
  var examname=  $("#examname").val();
  var examyear=  $("#examyear").val();
  var ID=  $("#ID").val();
    
    $.ajax({

type:'post',
dataType : 'json',
url:'{{url('/newexam')}}',
data:{examname:examname,examyear:examyear,ID:ID,"_token": "{{ csrf_token() }}",},
headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
success:function(data){
  


  $('#examadd input[type="text"]').val('');
  $("#NewExam").modal("hide");
  //$('#examtable tbody').append("<tr><th>" + data.id + "</th><td>" + data.exam_name + "</td><td>" + data.year +"</td><td>"+ data.formattedDate + "</td><td>"+'<button type="button" class="btn btn-warning btn-sm">Edit</button>'+"</td><td>"+'<button type="button" class="btn btn-danger btn-sm delete" id="">Delete</button>'+"</td></tr>");
  //alert('st');
  window.location="/examboard";
}


});


});








});





</script>