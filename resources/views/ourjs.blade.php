    
    <script src="js/app.js"></script> 
    <script>
        $(document).ready(function(){

          // $('.subn :a').live('focus', function(){
          //   var thisItem = $(this).parents('.subn');
          //   var thisId = thisItem.attr('id');
          //   $('.subn').removeClass('select'); //remove all focus
          //   thisItem.addClass('select');  //add focus to current item
          // });

         
      @foreach(App\Grade::all() as $grade)
      //$("#{{$grade->id}}").click();
      
//        $( "#{{$grade->id}}" ).on("focus",function(event) {
//          event.preventDefault();
        
//  });
     
      $("#{{$grade->id}}").on("click", function(event){
        var x = {{$grade->id}};
        $("#1").removeClass("select");
        $("#x").addClass("select");
        
        event.preventDefault();
        //var eleId = document.activeElement.id;
        //$("#eleId").addClass("select");
        //$("#{{$grade->id}}").focus();
        $('.subn').removeClass('select');
        $(document.activeElement).addClass('select'); 
         var grd_id = {{$grade->id}}

         $.ajax({

           type:'get',
           dataType:'html',
           url:'{{url('/subjects')}}',
           data:{grd_id:grd_id},
           success:function(data){
             

              

             $("#subjects").html(data);
             //alert('st');
           }

           
         });

         

     });
     @endforeach

     
      });
    
    
    </script>

    

  
    


    
    
