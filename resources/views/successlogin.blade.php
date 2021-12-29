


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/app.js"></script> 
    <script src="{{ asset('js/app.js') }}" ></script>
    <script src="{{ asset('js/ourjs.js') }}" ></script>

    
    
    @include('admin')
    @include('dashjs')
    @include('newjs')
    @include('exjs')

    
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{asset('fontawesome-free-5.15.1-web/css/all.min.css')}}" rel="stylesheet">

</head>
<body id="body-pd" class=" bdy" >


<header class="header" id="header">
            <div class="header__toggle">
                <i class='fa fa-bars' id="header-toggle"></i>
            </div>

            <div class="header__img">
                <img src="/img/perfil.jpg" alt="">
            </div>
        </header>



        <div class="l-navbar" id="nav-bar">
            <nav class="nav">
                <div>
                    <a href="#" class="nav__logo">
                        <i class='fas fa-layer-group nav__logo-icon'></i>
                        <span class="nav__logo-name">Vidyadarsha SRMS</span>
                    </a>

                    <div class="nav__list">
                        <a href="#" class="nav__link active"  id="kl">
                        <i class='fas fa-th nav__icon' ></i>
                            <span class="nav__name">Dashboard</span>
                        </a>

                        <a href="#" class="nav__link" id="subject">
                            <i class='fas fa-book-open' ></i>
                            <span class="nav__name">Subjects</span>
                        </a>
                        
                        <a href="/examboard" class="nav__link" id="exam">
                            <i class='fas fa-book-reader nav__icon' ></i>
                            <span class="nav__name">Exams</span>
                        </a>

                        <a href="#" class="nav__link" id="grades">
                            <i class='fas fa-university nav__icon' ></i>
                            <span class="nav__name">Grades</span>
                        </a>

                        <a href="#" class="nav__link">
                            <i class='fas fa-award nav__icon' ></i>
                            <span class="nav__name">Marks</span>
                        </a>

                        
                    </div>
                </div>

                <a href="{{ url('/main/logout') }}" class="nav__link">
                    <i class='fas fa-sign-out-alt nav__icon' aria-hidden="true" ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>

        <div id="confirmdelete" class="modal fade show" role="dialog">
    <div class="modal-dialog" role="content">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Confirmation</h4>
          <button type="button" class="close" data-dismiss="modal">
            &times;
          </button>
        </div>
        <div class="modal-body">
        <h4 align="center">Are you sure you want to delete this data ?</h4>

          <form action="" method="" id="examadd">
            
          
            

            
            

            

            

            <div class="form-row">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                            <button type="button" class="btn btn-primary btn-sm ml-1" id = "ok" name="ok">OK</button>        
                        </div>

            

          </form>
          
        </div>
        
      </div>
      
    </div>
    
  </div>

        
  <div id="NewExam" class="modal fade show" role="dialog">
    <div class="modal-dialog" role="content">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Add a New Exam</h4>
          <button type="button" class="close" data-dismiss="modal">
            &times;
          </button>
        </div>
        <div class="modal-body">
        @foreach($errors->all() as $error)

                <div class="alert alert-danger alert-block" role="alert">
                <button type="button" class="close" data-dismiss="alert"></button>
                    <li>{{ $error }}</li>
                
                </div>
                
            @endforeach

          <form action="" method="" id="examadd">
            
          <div class="form-group row">
              <div class="col-sm-4 order-sm-first offset-sm-1">
                    <label>Exam ID</label>  
                  </div>
                  <div class="col-sm-5">
                    <input type="text" name="ID" placeholder="" class="form-control form-control-sm"  id="ID">

                                <small class="form-text invalid-feedback">this field must be filled
                                         letters</small>
                   </div>
            </div>
            <div class="form-group row">
              <div class="col-sm-4 order-sm-first offset-sm-1">
                    <label>Exam Name</label>  
                  </div>
                  <div class="col-sm-5">
                    

                  <input type="text" name="examname" placeholder="" class="form-control form-control-sm"  id="examname">

                                <small class="form-text invalid-feedback">this field must be filled
                                         letters</small>
                   </div>
            </div>

            <div class="form-group row">
              <div class="col-sm-4 order-sm-first offset-sm-1">
                    <label>Exam Year</label> 
                  </div>
                  <div class="col-sm-5">
                    <input type="text" name="examyear" placeholder="" class="form-control form-control-sm"  id="examyear">

                                <small class="form-text invalid-feedback">this field must be filled
                                         letters</small>
                   </div>
            </div>

            

            

            

            <div class="form-row">
                            <input type="hidden" name="hidden_id" id="hidden_id">
                            <button type="button" class="btn btn-secondary btn-sm ml-auto" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary btn-sm ml-1" id = "NCAB" name="NCAB">Add Exam</button>        
                        </div>

            

          </form>
          
        </div>
        
      </div>
      
    </div>
    
  </div>


     
  

 <div id="hello">      
 @yield('content')

</div> 
        

        


       
   
        <!--===== MAIN JS =====-->
        <script >
            /*===== SHOW NAVBAR  =====*/ 
const showNavbar = (toggleId, navId, bodyId, headerId) =>{
   const toggle = document.getElementById(toggleId),
   nav = document.getElementById(navId),
   bodypd = document.getElementById(bodyId),
   headerpd = document.getElementById(headerId)

   // Validate that all variables exist
   if(toggle && nav && bodypd && headerpd){
       toggle.addEventListener('click', ()=>{
           // show navbar
           nav.classList.toggle('show')
           // change icon
           toggle.classList.toggle('fas')

           toggle.classList.toggle('fa-times')
           // add padding to body
           bodypd.classList.toggle('body-pd')
           // add padding to header
           headerpd.classList.toggle('body-pd')
       })
   }
}

showNavbar('header-toggle','nav-bar','body-pd','header')

/* 
const linkColor = document.querySelectorAll('.nav__link')

function colorLink(){
   if(linkColor){
       linkColor.forEach(l=> l.classList.remove('active'))
       this.classList.add('active')
   }
}
linkColor.forEach(l=> l.addEventListener('click', colorLink))*/ 

      
        </script>


    


    
    
</body>
</html>

