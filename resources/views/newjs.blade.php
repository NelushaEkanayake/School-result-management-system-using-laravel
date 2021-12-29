<script src="js/app.js"></script> 

<script>
$(document).ready(function(){
var exam_id;



$(".delete").on("click", function(event){
    alert('hh')
  exam_id = $(this).attr('id');
  $(#confirmdelete).modal('show');
});

$("#ok_delete").on("click", function(event){
  
    
    $.ajax({


url:"/deletedata"+ exam_id,
beforeSend: function(){
  $(#ok_delete).text('Deleting...');
}
success:function(data){
    setTimeout(function(){
        $(#confirmdelete).modal('hide');
        $(#examtable).DataTable().ajax.reload();
        alert('Data Deleted');
    }, 2000);


  
}


});


});

});


</script>
