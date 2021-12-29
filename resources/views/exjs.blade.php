<script src="js/app.js"></script> 
<script>
        $(document).ready(function(){
          var exam_id;

          $(".addexam").on("click", function(event){
            $(".modal-title").text('Add Record');
            $("#NCAB").text('Save');
            $('#examadd input[type="text"]').val('');
            $("#hidden_id").val(hidden_id);
            
          $("#NewExam").modal('show');
  
});
          $(".delete").on("click", function(event){
            exam_id = $(this).attr('id');
          $("#confirmdelete").modal('show');
  
});

$("#ok").on("click", function(event){
  $.ajax({

type:'get',
url:"/deletedata"+"/"+exam_id,
beforeSend: function(){
  $("#ok").text('Deleting...');
},

success:function(data){
  
  setTimeout(function(){
        $("#confirmdelete").modal('hide');
        window.location = "/examboard";
$("#ok").text('ok');
        alert('Data Deleted');
    }, 2000);

       
    


   

  
  //alert('st');
}


}); 
  
});




          
      });


      
    
    
    </script>

