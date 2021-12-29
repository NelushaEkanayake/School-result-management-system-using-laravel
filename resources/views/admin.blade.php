<script src="js/app.js"></script> 

<script>
$(document).ready(function(){

    $(".edit").on("click", function(event){
        
        var id = $(this).attr('id');
        $.ajax({


url:"/exam"+"/"+id+"/edit",
dataType:"json",

success:function(data){
  
  $("#ID").val(data.result.id);
  $("#examname").val(data.result.exam_name);
  $("#examyear").val(data.result.year);
  $("#hidden_id").val(id);
  $(".modal-title").text('Edit Record');
  $("#NCAB").text('Update');
  $("#NewExam").modal("show");
    


   

  
  //alert('st');
}


}); 
        
     
    });


});
</script> 

