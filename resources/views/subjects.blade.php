<script src="js/app.js"></script> 
<script>
        $(document).ready(function(){
         

      @foreach(App\subject::all() as $sub)
      $("#{{$sub->id}}").on("click", function(event){
        //$("#1").removeClass("select");
        event.preventDefault();

  
        var exam=  $("#inputGroupSelect01").val();
       
       var grade =  $(".select").attr('id');

      

      var subject = this.id;
    

       console.log(subject);
        
        
       console.log(subject);
      let url = "amarks/"+encodeURIComponent(exam)+"/"+encodeURIComponent(grade)+"/"+encodeURIComponent(subject);
      location.href = url;   

         

         

     });
     @endforeach
      });
    
    
    </script>

    





@foreach($subs as $d)
                        <div class="col-4 sub">
                        <div class="card" style="width: 18rem;" > 
  <img class="card-img-top bimg" src="./img/{{$d->image}}" alt="Card image cap">
  <div class="card-body">
    <p class="card-text" id="{{$d->id}}" value="{{$d->id}}"><a href=""  >{{$d->subject_name}}</a></p>
  </div>
</div>
                        </div>
                        @endforeach



                        