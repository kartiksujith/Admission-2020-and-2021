<!DOCTYPE html>
<html lang="en">
   <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="cache-control" content="no-cache" />
      <meta http-equiv="pragma" content="no-cache" />
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Vivekanand Education Society's Institute of Technology</title>

      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <link rel="icon" href="{{ asset('images/favicon.png') }}" type="image/png">
      <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
      <link href="{{ asset('css/style.css') }}" rel="stylesheet" media="all">
      <link href="{{ asset('css/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
      <link href="{{ asset('css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css" />
      <script src="{{ asset('js/jquery.min.js')  }}"></script>
      <script src="{{ asset('js/bootstrap.min.js') }}"></script>
      <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->

 
<meta charset="utf-8">
 
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
 <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
 <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
  
  
 <!-- Bootstrap CSS -->
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
  
 
  
  
 <!--fontawesome-->
  
 <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>

 <!--This is used for search icon. Instead putting icon manually it is loaded from fontawesome-->
  
</head>

   <header style="position: fixed;top: 0px;width: 100%;z-index: 2;">
    <!-- <div class="col-md-12 pull-left top-banner-contact" style="background-color: whitesmoke" >
       <div class=" col-md-3 logo" style="padding-left: 50px "><a href="{{ asset('admission') }}"><img src="{{ asset('images/navlogo.png') }}" class="img-responsive" style="width:250px;height:75px ;padding-bottom:10px" /></a></div>
       <div class=" col-md-3 logo" style="padding-top: 25px;padding-left: 50px ">
             <a href="{{ asset('Aboutus') }}">AboutUs</a></div>
               <div class=" col-md-3 logo" style="padding-top: 25px;padding-left: 50px">
                <a href="https://ves.ac.in/vesit/newsletters/vishwakarma/vishwakarma-2018/"> College Magazine</a>
               </div>
                <div class=" col-md-3 logo" style="padding-top: 15px;padding-left: 65px">
                  <a href="mailto:vesit.admission@ves.ac.in"><span class="fa fa-envelope" aria-hidden="true"></span> vesit.admission@ves.ac.in</a><br>
               <a href="+91-22-61532510" ><span class="fa fa-phone" aria-hidden="true"></span> +91-22-61532510</a></div>
    </div> -->
    <!-- navbar -->
 
 <style type="text/css">

     
    @media screen and (max-width: 898px) and (min-width: 767px) {
      #nav
      {
        margin-left: -60px !important;
      }

    }
    @media screen and (max-width: 1420px) and (min-width: 1226px) {
       .main_nav_vesit
       {
        font-size: 14px;
       }
       .secondnav{
            font-size: 14px;

       }
    }
    @media screen and (max-width: 1166px ) and (min-width: 1022px) {
      .navigation{
       margin-top: 20px;
      }

  }
   @media screen and (max-width: 1305px ) and (min-width: 1226px) {
      .navigation{
       margin-top: 20px;
      }

  }
  
    @media screen and (max-width: 1225px) and (min-width: 1022px) {
       .main_nav_vesit
       {
        font-size: 12px;
       }
       .secondnav{
            font-size: 12px;

       }
    }

    @media screen and (max-width: 1021px) and (min-width: 767px) {
        
       .main_nav_vesit
       {
        font-size: 11px;
       }
    }
      @media screen and (max-width: 351px) and (min-width: 270px) {
         .main_nav_logo
         {
          width: 180px !important;
         }
      }
      @media screen and (max-width: 269px) and (min-width: 240px) {
         .main_nav_logo
         {
          width: 160px !important;
          height: 60px !important;
          margin-left: -60px !important;
         }
      }
      @media screen and (max-width: 1249px) and (min-width: 1230px) {
       .header_bottom
       {
        top:90px !important;
       }
    }
    @media screen and (max-width: 1229px) and (min-width: 1226px) {
       .header_bottom
       {
        top:98px !important;
       }
    }
    @media screen and (max-width: 1119px) and (min-width: 1022px) {
       .header_bottom
       {
        top:96px !important;
       }
    }
    @media screen and (max-width: 1022px) and (min-width: 769px) {
       .secondnav
       {
        font-size: 14px !important; 
       }
    }
    @media screen and (max-width: 1184px) and (min-width: 1025px) {
       .vesit_marq
       {
        margin-top: 60px !important;
       }
    }
    @media screen and (max-width: 1024px) and (min-width: 1020px) {
       .vesit_marq
       {
        margin-top: 10px !important;
       }
    } 
    @media screen and (max-width: 958px) and (min-width: 769px) {
       .vesit_marq
       {
        margin-top: 40px !important;
       }
    }
   /* .header_bottom_li*/
    {
      border:none !important;
    }
.img-responsive
{
  display: inherit !important;
}
 
@media screen and (max-width: 1722px) and (min-width: 1436px) {
      /*.header_bottom_li
      {
    width: 230px!important;   
      }
      .secondnav{
        text-align: center!important;
      }*/

    }

@media screen and (max-width: 1435px) and (min-width: 1024px) {
/*      .header_bottom_li
      {
    width: 150px !important;   
      }
      .secondnav{
        text-align: center!important;
            width: 240px !important;

      }
*/
    }
@media screen and (max-width: 778px) and (min-width: 169px) {
     
     .list-styled{
          
              list-style-type: none;
              }    

    }
 
    


</style>

 
<nav class="navbar navbar-expand-md navbar-light fixed-top" id="menu1" style="background-color: #f7fbfc" >
 
 <div class=" col-md-3 logo" style="padding-left: 50px "><a href="https://vesit.ves.ac.in/"><img src="{{ asset('images/logo.png') }}" class="img-responsive main_nav_logo" style="float:left;margin-left:-45px;width:250px;height:75px ;padding-bottom:10px" /></a>
  

<span style="padding-left: 20px !important;">
<button type="button" class="navbar-toggler" style="background-color: whitesmoke;margin-top: 20px;float:right;" data-toggle="collapse" data-target="#nav">
 
<span class="navbar-toggler-icon"></span>
 
</button>
  </span>
</div>
 
<div class="collapse navbar-collapse justify-content-between" id="nav" style="text-align: center;">
  <ul class="navbar-nav ml-auto">
 
 

  <li class="nav-item" >
  <a class="nav-link font-weight-bold px-3 main_nav_vesit" style="color:#204a84;" href="https://vesitadmissions.ves.ac.in/Aboutus" ><i class="fa">&#xf19c;</i>&nbsp;About&nbsp;Us</a>
  </li>
  <li class="nav-item" >
  <a class="nav-link font-weight-bold px-3 main_nav_vesit" style="color:#204a84;" href="https://ves.ac.in/vesit/newsletters/vishwakarma/vishwakarma-2018/" target="_blank"><i class='fas'>&#xf518;</i>&nbsp;&nbsp; College&nbsp;Magazine</a>
  </li>
  <li class="nav-item" >
  <a class="nav-link font-weight-bold px-3 main_nav_vesit" style="color:#204a84;" href="https://ves.ac.in/facilities/hostels/" target="_blank"><i class='fas'>&#xf1ad;</i>&nbsp;Hostel</a>
  </li>
  <li class="nav-item" >
  <a class="nav-link font-weight-bold px-3 main_nav_vesit" style="color:#204a84;" href="https://vesittpc.ves.ac.in/" target="_blank"><i class="fa">&#xf2b5;</i>&nbsp;Placement</a>
  </li>
  <li class="nav-item" >
  <a class="nav-link font-weight-bold px-3 main_nav_vesit" style="color:#204a84;" href="{{ asset('pdfs/VESIT PROSPECTUS  2019-20.pdf') }}" target="_blank"><i class="fa fa-file" aria-hidden="true"></i>&nbsp;Prospectus</a>
  </li>
  <li class="nav-item" >
  <a class="nav-link font-weight-bold px-3 main_nav_vesit" style="color:#204a84;" href="https://vesitadmissions.ves.ac.in/contact"><i class="fa">&#xf041;</i>&nbsp;Contact&nbsp;Us</a>
  </li>
  <!-- <div  style="padding-top: 15px;padding-left: 65px ; text-align:right"> -->
  <!-- <li class="nav-item">
  <a class="nav-link font-weight-bold px-3" style="color:#204a84;" href="mailto:vesit.admission@ves.ac.in"><span class="fa fa-envelope" aria-hidden="true"></span> vesit.admission@ves.ac.in</a></li>
  <li class="nav-item">
  <a class="nav-link font-weight-bold px-3" style="color:#204a84;" href="+91-22-61532510" ><span class="fa fa-phone" aria-hidden="true"></span> +91-22-61532510</a></li> -->
  <li class="nav-item main_nav_vesit">
    <div>
      <a class="nav-link font-weight-bold px-3" style="color:#204a84;" href="mailto:vesit.admission@ves.ac.in"><span class="fa fa-envelope" aria-hidden="true"></span> vesit.admission@ves.ac.in</a>
      <a class="nav-link font-weight-bold px-3" style="color:#204a84;" href="+91-22-61532510" ><span class="fa fa-phone" aria-hidden="true"></span> +91-22-61532510</a>
    </div>
  </li>
  <!-- </div> -->
  </ul>
 
</div>
 
</nav>
</header>


<header style="position: fixed;top: 80px !important;width: 100%;z-index: 1;" class="header_bottom">
   
<style type="text/css">
  
  * {
  margin: 0;
  padding: 0;
  outline: none;
  border: none;
  text-decoration:none;
  }
.main-menu {
  display:block;
  position:relative;
  background:#204a84;
}
.container-menu {
  width:100%;
  margin:0 auto;
}
.main-menu:before,.main-menu:after{
  display: table;
  line-height: 0;
  content: "";
}
.core-menu {
  text-align:center;
  font:normal normal normal 1em/1 Roboto, sans-serif;
  overflow:hidden;
}
.core-menu li {
  list-style:none;
  display:inline-block;
  cursor:pointer;

    
}
.core-menu li a {
  display:inline-block;
  padding:1em;
  color : white;
  font-weight: 600;
    
}
.core-menu li a:hover {
  background:#ffff;
  color : #204a84;
}
li span.toggle {
  padding-left:1em;
}
.toggle:before {
  content:"\f107";
  font:normal normal normal 16px/1 FontAwesome;
}
.dropdown {
  position:absolute;
  width:230px;
  background:#204a84;
  text-align:left;
  display:none;
  margin-left: 0px!important;
}
.dropdown li {
  display:block;
  }
.dropdown li a {
  display:block;
}
.dropdown2 {
  position:absolute;
  width:230px;
  background:#204a84;
  text-align:left;
  display:none;
  right:-100%;
  top:0;
}
.dropdown2 li {
  display:block;
  }
.dropdown2 li a {
  display:block;
}
li span.toggle2 {
  position:absolute;
  right:0;
  margin-right:20px;
}
.toggle2:before {
  content:"\f105";
  font:normal normal normal 16px/1 FontAwesome;
}
.hamburger-menu {
  padding:1em;
  display:none;
      color: #ffffff;
  /*font:normal normal normal 16px/1 Roboto;*/
  text-transform:uppercase;
}
@media screen and (max-width: 2020px) and (min-width: 1338px) {
  .lispace{
    padding-left: 20px;
    padding-right: 20px;
  }
.homee{
  padding-right: 50px;
}
}
@media  (max-width: 2520px) and (min-width: 1538px) {
  .lispace{
    /*padding-left: 40px;*/
    padding-right: 40px;
  }
  .homee{
    padding-right: 100px!important;
  }

}


@media  (max-width: 2520px) and (min-width: 1438px) {
  .lispace{
    padding-left: 40px;
    padding-right: 40px;
  }
  

}
@media screen and (max-width: 1320px) and (min-width: 1024px) {
  .dropdown2 {
width: 160px;
}

.container-menu {

     width: 100%;
}
ul .dropdown{
  width: 15% !important;
}
li span .toggle2 {
    margin-right: 55px;
}

}



@media (max-width:768px) {
  
  .main-menu {
    height:50px;
  }
  .container-menu {

     width: 100%;
}
  
  .navigation {
    float:left;
    display:block;
    width:100%;
  }
  .core-menu {
    float:right;
    width:100%;
    background: #204a84;
    margin:auto;
    display:none;
  }
  
  .core-menu li {
    width:100%;
    display:block;
  }
  .core-menu li a{
    display:block;
    margin:auto;

  }
  .hamburger-menu {
    display:block;
    text-align:center;
    padding-right:60px;
    float:none;
    width:100%;
  }
  .burger-1, .burger-2, .burger-3 {
  display:block;
  position:absolute;
  width:20px;
  height:3px;
  border-radius:30px;
  right:0;
  margin-right:25px;
  background:#fff;
    -webkit-transition:.2s ease;
    -ms-transition:.2s ease;
    -moz-transition:.2s ease;
    -o-transition:.2s ease;
  transition:.2s ease; 
  }
  .burger-1 {
  top:15px;
  }
  .burger-2 {
  top:23px;
  }
  .burger-3 {
  top:31px;
  }
  .burger-1.open, .burger-2.open, .burger-3.open {
  -webkit-transition:.2s ease;
  -ms-transition:.2s ease;
  -moz-transition:.2s ease;
  -o-transition:.2s ease;
    transition:.2s ease;
    transform-origin:50% 50%;
  }
  .burger-1.open {
    top:25px;
    width:23px;
    transform:rotate(45deg);
    -webkit-transform:rotate(45deg); 
    -ms-transform:rotate(45deg); 
    -moz-transform:rotate(45deg); 
    -o-transform:rotate(45deg); 
  }
  .burger-2.open {
    opacity:0;
  }
  .burger-3.open {
    top:25px;
    width:23px;
    transform:rotate(-45deg);
  }
  .dropdown {
    width:100%;
    background:#204a84;
    text-align:center;
    position:relative;
  }
  .dropdown2 {
    right:0;
    top:0;
    width:100%;
    position:relative;
    padding:0 20px;
}


</style>
<style type="text/css">
   @media (min-width: 768px){
      .midcol6{
             margin-left: 200px !important;

      }
    }
       @media (min-width:1000px){
      .midcol6{
             margin-left: 250px !important;

      }
   }
</style>

<script type="text/javascript">
  
  $(document).ready(function(){
  //the trigger on hover when cursor directed to this class
    $(".core-menu li").hover(
    function(){
      //i used the parent ul to show submenu
        $(this).children('ul').slideDown('fast');
    }, 
      //when the cursor away 
    function () {
        $('ul', this).slideUp('fast');
    });
  //this feature only show on 600px device width
    $(".hamburger-menu").click(function(){
      $(".burger-1, .burger-2, .burger-3").toggleClass("open");
        $(".core-menu").slideToggle("fast");
    });
});
/** credit:@rafonzoo 
http://rafonzo.blogspot.co.id/ **/
</script>

<div id='main-menu' class='main-menu'>
  <div class='container-menu' style="margin-bottom: -13px;">
    <nav class='navigation'>
      <span class='hamburger-menu'>Menu
        <span class='burger-1'></span>
        <span class='burger-2'></span>
        <span class='burger-3'></span>
      </span>
      <ul class='core-menu '>
        <li class="lispace homee"><a href="https://vesitadmissions.ves.ac.in/"><i class="fa fa-fw fa-home"></i>&nbsp;Home</a></li>
        <li><a href='#'><i  class="fa">&#xf0c0;</i>&nbsp;Students Intake<span class='toggle'></span></a>
          <ul class='dropdown'>
            <li><a href="https://vesitadmissions.ves.ac.in/doc/12">First Year of Engineering</a></li>
            <li><a href="https://vesitadmissions.ves.ac.in/doc/22">Direct Second Year</a></li>
            <li><a href="https://vesitadmissions.ves.ac.in/doc/32">Master of Computer Applications</a></li>
            <li><a href="https://vesitadmissions.ves.ac.in/doc/42">Master of Engineering</a></li>
          </ul>
        </li>
    <li class="lispace" ><a href='#'><i class='fas'>&#xf156;</i>Fee Structure<span class='toggle'></span></a>
          
             <ul class='dropdown'>
            <li><a href="https://vesitadmissions.ves.ac.in/doc/11">First Year of Engineering</a></li>
            <li><a href="https://vesitadmissions.ves.ac.in/doc/21">Direct Second Year</a></li>
            <li><a href="https://vesitadmissions.ves.ac.in/doc/31">Master of Computer Applications</a></li>
            <li><a href="https://vesitadmissions.ves.ac.in/doc/41">Master of Engineering</a></li>
          </ul>
          
        </li>
        <li class="lispace" ><a href='#'><i class="fa">&#xf19d;</i>Under Graduate <span class='toggle'></span></a>
          <ul class='dropdown'>
            <li><a href='#'>First Year of Engineering<span class='toggle2'></span></a></a>
              <ul class='dropdown2'>
                <li><a href="https://vesitadmissions.ves.ac.in/doc/13">List of required document</a></li>
                <li><a href="">DTE CAP Manual</a></li>
                <li><a href="">Merit List</a></li>
                <li><a href="https://vesitadmissions.ves.ac.in/pdfs/CAP_admission_Steps_after_DTE_allotted_seat.pdf">Steps to be followed by candidates allotted seat at VESIT</a></li>
                <li><a href="https://vesitadmissions.ves.ac.in/pdfs/Admission Procedure acap 2020-21_final.pdf">Against CAP Admission Procedure/Rules 2020-21</a></li>
              </ul>
            </li>
            <li><a href='#'>Direct Second Year<span class='toggle2'></span></a></a>
              <ul class='dropdown2'>
                <li><a href="https://vesitadmissions.ves.ac.in/doc/23">List of required document</a></li>
                <li><a href="">DTE CAP Manual</a></li>
                <li><a href="">Merit List</a></li>
                <li><a href="https://vesitadmissions.ves.ac.in/pdfs/CAP_admission_Steps_after_DTE_allotted_seat.pdf">Steps to be followed by candidates allotted seat at VESIT</a></li>
                <li><a href="https://vesitadmissions.ves.ac.in/pdfs/Admission Procedure acap 2020-21_final.pdf">Against CAP Admission Procedure/Rules 2020-21</a></li>
              </ul>
            </li>


          </ul>
        </li> </li><li class="lispace" ><a href='#'><i class="fa">&#xf19d;</i>Post Graduate <span class='toggle'></span></a>
          <ul class='dropdown'>
            <li><a href='#'>Master of Computer Applications<span class='toggle2'></span></a></a>
              <ul class='dropdown2'>
                <li><a href="https://vesitadmissions.ves.ac.in/doc/33">List of required document</a></li>
                <li><a href="">DTE CAP Manual</a></li>
                <li><a href="">Merit List</a></li>
                <li><a href="https://vesitadmissions.ves.ac.in/pdfs/CAP_admission_Steps_after_DTE_allotted_seat.pdf">Steps to be followed by candidates allotted seat at VESIT</a></li>
                <li><a href="https://vesitadmissions.ves.ac.in/pdfs/Admission Procedure acap 2020-21_final.pdf">Against CAP Admission Procedure/Rules 2020-21</a></li>
              </ul>
            </li>
            <li><a href='#'>Master of Engineering<span class='toggle2'></span></a></a>
              <ul class='dropdown2'>
                <li><a href="https://vesitadmissions.ves.ac.in/doc/43">List of required document</a></li>
                <li><a href="">DTE CAP Manual</a></li>
                <li><a href="">Merit List</a></li>
                <li><a href="https://vesitadmissions.ves.ac.in/pdfs/CAP_admission_Steps_after_DTE_allotted_seat.pdf">Steps to be followed by candidates allotted seat at VESIT</a></li>
                <li><a href="https://vesitadmissions.ves.ac.in/pdfs/Admission Procedure acap 2020-21_final.pdf">Against CAP Admission Procedure/Rules 2020-21</a></li>
              </ul>
            </li>


          </ul>
        </li>
        <li class="lispace" ><a href='#'><i class="fa fa-fw fa-user"></i>Login/Register <span class='toggle'></span></a>
          
             <ul class='dropdown'>
            <li><a href="{{ route('login') }}">ACAP Vacancy Form</a></li>
            <li><a href="{{route('login')}}">DTE CAP Admission</a></li>
            
          </ul>
          
        </li>
        
      </ul>
    </nav>
  </div>
</div>



</header>
<body>
    <br><br><br><br><br><br><br>
      <div class="container-fluid" >
         @yield('content')
      </div>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}"></script>
   </body>
   <!-- <footer class="footer" id="foot" style="height: auto;">
      <div class="container">
      <div class="container text-center text-md-left" style="padding-top:10px"> -->
    <!-- Grid row -->
    <!-- <div class="row"> -->

      <!-- Grid column -->
      <!-- <div class="col-md-3 mx-auto" style="color:white"> -->

        <!-- Links -->
      <!--   <h5 style="color:white">Address</h5>
        <p>Hashu Advani Memorial Complex, Collector’s Colony, Chembur, Mumbai – 400 074. India.</p>
        <a href="mailto:vesit.admission@ves.ac.in"><span class="fa fa-envelope" aria-hidden="true"></span> vesit.admission@ves.ac.in</a><br>
        <a href="+91-22-61532510" ><span class="fa fa-phone" aria-hidden="true"></span> +91-22-61532510</a>
      

      </div> -->
      <!-- Grid column -->

      <!-- <hr class="clearfix w-100 d-md-none"> -->

      <!-- Grid column -->
      <!-- <div class="col-md-3 mx-auto" style="color:white;padding-left:65px"> -->

        <!-- Links -->
        <!-- <h5 style="color:white">Useful Links</h5>
        <ul >
                  <li>
                   
                  </li> -->
                  <!-- <li style="text-align:center;display:inline-block;font-size: 15px;">
                  <a style="color:#ffffff;" href="mailto:vesit.admission@ves.ac.in"><span class="fa fa-envelope" aria-hidden="true"></span> vesit.admission@ves.ac.in</a>
                  </li> -->
                  <!-- <li>
                    
                  </li>
                   <li>
                  </li>
                  <li>
                    <a href="#" class="isDisabled">Grievance form</a>
                  </li>
                  <li>
                    <a href="#" class="isDisabled">Website feedback form</a>
                  </li>
                  <li>
                    <a href="#" class="isDisabled">Enquiry form</a>
                  </li>
              </ul>

      </div> -->
      <!-- Grid column -->

<!--       <hr class="clearfix w-100 d-md-none">
 -->
      <!-- Grid column -->
      <!-- <div class="col-md-3 mx-auto" style="color:white;padding-left:65px;padding-right:0px"> -->

        <!-- Links -->
        <!-- <h5 style="color:white">Other Links</h5>

        <ul>
                <li>
                  <a href="https://www.aicte-india.org/" target="_blank"> AICTE</a>
                </li>
              <li>
                  <a href="https://vesittpc.ves.ac.in/" target="_blank" >VESIT Training and placement cell</a>
                </li>
              <li>
                  <a href="http://www.dtemaharashtra.gov.in/" target="_blank" >DTE Maharashtra</a>
                </li>
                <li>
                  <a href="https://mu.ac.in/" target="_blank" >Mumbai University</a>
                </li>
                <li>
                  <a href="#" target="_blank" class="isDisabled">Privacy policy</a>
                </li>
        </ul>

      </div> -->
      <!-- Grid column -->

      <!-- <hr class="clearfix w-100 d-md-none" > -->

      <!-- Grid column -->
      <!-- <div class="col-md-3 mx-auto" style="color:white;padding-left:65px"> -->

        <!-- Links -->
<!--         <h5 style="color:white">Social Links</h5>

        <ul class="list-unstyled">
              <li>
                  <a href="https://www.instagram.com/vesitedu/" target="_blank" ><i class="fab fa-instagram  fa-lg" aria-hidden="true"></i>&nbspInstagram</a>
                </li>
              <li>
                  <a href="https://www.facebook.com/vesitedu/" target="_blank" ><i class="fab fa-facebook-square fa-lg" aria-hidden="true"></i>&nbspFacebook</a>
                </li>
                <li>
                  <a href="https://twitter.com/vesitedu" target="_blank" ><i class="fab fa-twitter-square  fa-lg" aria-hidden="true"></i>&nbspTwitter</a>
                </li>
                <li>
                  <a href="hhttp://www.linkedin.com/in/vesit" target="_blank" ><i class="fab fa-linkedin fa-lg" aria-hidden="true"></i>&nbspLinkedIn</a>
                </li>
        </ul>

 -->      <!-- </div> -->
      <!-- Grid column -->

    <!-- </div> -->
    <!-- Grid row -->

 <!--  </div>
          <div class="row">
            <div class="col-md-12">
                <hr class="deep-purple accent-1 mb-2 mt-0 d-inline-block mx-auto" style="width: 100%;">   
                <p class="text-muted" style="padding-bottom:15px;margin-top:5px">&copy; 2019 <a href="http://vesit.ves.ac.in">Vivekanand Education Society's Institute of Technology</a></p>
              
            </div>
          </div>
      </div>
   </footer> -->

<!-- Footer -->
<style type="text/css">
  /*@media (min-height:750px) {*/
    footer{
 margin-top: 5%;

    }
    body{
      min-height: 100%;
    }
    /*}*/
</style>
<footer style="background-color:  #222222; color:white;" class="page-footer font-small white pt-4">

  <!-- Footer Links -->
  <style type="text/css">
  .whitecol{
    color: white !important;
  }
  .whitecol:hover{
    color: white !important;
    font-weight: 600 !important;
  }
  .isDisabled{
    color: grey !important;
  }
</style>
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-1 mt-md-0 mt-1"></div>
      <div class="col-md-3 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Address</h5>
       <p>Hashu Advani Memorial Complex, Collector’s Colony, Chembur, Mumbai – 400 074. India.</p>
        <a class="whitecol"  href="mailto:vesit.admission@ves.ac.in"><span class="fa fa-envelope" aria-hidden="true"></span> vesit.admission@ves.ac.in</a><br>
        <a  class="whitecol" href="+91-22-61532510" ><span class="fa fa-phone" aria-hidden="true"></span> +91-22-61532510</a>

      </div>
      <!-- Grid column -->

      <!-- <hr class="clearfix w-100 d-md-none pb-3"> -->
      <!-- Grid column -->
      <div class="col-md-2 mb-md-0 mb-2">

        <!-- Links -->
        <h5 class="text-uppercase" style="color: white;">Useful Links</h5>

        <ul class="list-styled">
          <li>
          <a class="whitecol" style="color: white;"  href="https://vesitadmissions.ves.ac.in/contact" >Contact Us&nbsp;</a>
          </li>
          <li>
          <a class="whitecol"  href="#" >Suggestion Box</a>
          </li>
          <li>
            <a class="whitecol "  href="#" >FAQs</a>
          </li>
          <li>
            <a class="whitecol  "style="color: white;"  href="#" >Grievance form</a>
          </li>
          <li>
            <a class="whitecol  " style="color: white;" href="#"  >Website feedback form</a>            
          </li>
          <li>
            
            <a class="whitecol isDisabled " style="color: white;" href="#" >Enquiry form</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase" style="color: white;">Other Links</h5>

        <ul class="list-styled">
            <li>
          <a  class="whitecol " href="https://www.aicte-india.org/" target="_blank"> AICTE</a>
          </li>
          
          <li>
            <a class="whitecol"  style="color:white"  href="https://vesittpc.ves.ac.in/ " target="_blank" >VESIT Training and placement cell</a>
          </li>
          <li>
            <a class="whitecol"  href="http://www.dtemaharashtra.gov.in/" target="_blank" >DTE Maharashtra</a>
          </li>
          <li>
            <a class="whitecol"  href="https://mu.ac.in/" target="_blank" >Mumbai University</a>
          </li>
          <li>
            <a class="whitecol isDisabled" style="color: white;" href="#" target="_blank" >Privacy policy</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase" style="color: white;">Social Links</h5>

        <ul class="list-unstyled">
          <li>
            <a  class="whitecol" href="https://www.instagram.com/vesitedu/" target="_blank" ><i class="fab fa-instagram  fa-lg" aria-hidden="true"></i>&nbspInstagram</a>
          </li>
          <li>
            <a  class="whitecol" href="https://www.facebook.com/vesitedu/" target="_blank" ><i class="fab fa-facebook-square fa-lg" aria-hidden="true"></i>&nbspFacebook</a>
          </li>
          <li>
            <a  class="whitecol" href="https://twitter.com/vesitedu" target="_blank" ><i class="fab fa-twitter-square  fa-lg" aria-hidden="true"></i>&nbspTwitter</a>
            
          </li>
          <li>
              <a class="whitecol"  href="hhttp://www.linkedin.com/in/vesit" target="_blank" ><i class="fab fa-linkedin fa-lg" aria-hidden="true"></i>&nbspLinkedIn</a>
            
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" ><p style="color: white;" >&copy; 2020 <a href="http://vesit.ves.ac.in" style="color: white;"  >Vivekanand Education Society's Institute of Technology</a></p>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->


  
</html>     
