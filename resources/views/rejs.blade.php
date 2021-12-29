<script src="js/app.js"></script> 
    <script>


      function validateInput(indexNo) {
    
    if(indexNo !==""){
         $("#inputCity").removeClass("is-invalid");
     }else{
        $("#inputCity").addClass("is-invalid");
     }

     if( indexNo =="")
        return true; //has errors

     return false;
    }
       
    function handleClickRegisterDOC() {
      
      $("#resubmit").on("click", function(event){

        event.preventDefault();

        let exam = $("#examName").val();

        let indexNo = $("#inputCity").val();

        let check1 = validateInput(indexNo);

        if (!check1) {
          
        $.ajax({
          
           type:'get',
           dataType:'html',
           url:'{{url('/marks')}}',
           data:{exam:exam,indexNo:indexNo},
           success:function(results){
             

              //alert($subs)
              //console.log($subs);
             $("#mark").html(results);
             //alert('st');
           }

           
         });

        }

        if(check1){
          
          $("#mtable").addClass("d-none");

        }

         

     });

    }

   
   
   
   
    $(document).ready(function(){

      handleClickRegisterDOC();
     
      });
    
    
    </script>

    

  
    


    
    
