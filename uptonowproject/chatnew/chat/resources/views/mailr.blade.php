 <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
 <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Rotaract
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
   <!--     chamali    -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />


  
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <style type ="text/css">
    .box{
            
            margin:0 auto;
            border:1px solid #ccc;

    }
    .has-error
    {
        border-color:#cc0000;
        

    }
  
  .table{
      margin-top:-55px;
  }
}
    </style>
</head>

<body class="">
  <div class="wrapper " style="background-color:#1cb8b1">
    <div class="sidebar"style="background-color:#1cb8b1">
    
      <div class="logo" style="background-color:#024744">
        <a href="" class="simple-text logo-mini">
         
        </a>
        <a href="" class="simple-text logo-normal">
       Rotaract Badulla
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper"style="background-color:#044240">
        <ul class="nav">
          <li class="{{'dashboard'== request()->path() ? 'active' :''}}">
            <a href="/dashboard">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          
          <li class="{{'reportgeneration'== request()->path() ? 'active' :''}}">
            <a href="/reportgeneration">
              <i class="now-ui-icons files_single-copy-04"></i>
              <p>Report Generation</p>
            </a>
          </li>
          <li class="{{'sendemail'== request()->path() ? 'active' :''}}">
            <a href="/sendemail">
              <i class="now-ui-icons ui-1_email-85"></i>
              <p>Send Email</p>
            </a>
          </li>
         
          </li>
          <li class="{{'registered-users'== request()->path() ? 'active' :''}}">
            <a href="/registered-users">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
           <li class="{{''== request()->path() ? 'active' :''}}">
            <a href="/tables.html">
              <i class="now-ui-icons business_money-coins"></i>
              <p>Donations</p>
            </a>
          </li>
          
           <li class="">
            <a href="./tables.html">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Add Job Vacancies</p>
          </li>
           
          <li class="" style="color:orange">
            <a href="">
              <i class="now-ui-icons shopping_credit-card"></i>
              <p>View Membership Payments</p>
            </a>
          </li>
           
           <li class="">
            <a href="/postpro">
              <i class="now-ui-icons tech_tv"></i>
              <p>Publish Projects</p>
          </li>
          <li class="">
            <a href="/adminaddpro">
              <i class="now-ui-icons tech_tv"></i>
              <p>Add Projects</p>
          </li>
           <li class="">
            <a href="/viwnwpro">
              <i class="now-ui-icons tech_tv"></i>
              <p>Accept Projects</p>
          </li>
          <li class="">
            <a href="/events">
              <i class="now-ui-icons ui-1_calendar-60"></i>
              <p>Publish Events</p>
            </a>
          </li>
           
           
         
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">

      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute" >
        <div class="container-fluid">
         
          
          <div class="collapse navbar-collapse justify-content-end" id="navigation"style="margin-bottom:-25px" >
            
            <ul class="navbar-nav" >
                 
                 
              <li class="nav-item" >
                  <i class="now-ui-icons users_single-02"></i>
              </li>
              <li class="nav-item dropdown" >
                               
                                <a id="navbarDropdown" style="color:white" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->firstname }} <span class="caret"  ></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style= "background-color:black">
                                    <a class="dropdown-item" style="color:green;" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
               </li>
            </ul>
         
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm" style="height:0px">
      </div>
     <div class="row" style="background-image: url(/images/project.jpg); ">
<div class="col-md-12">
<br/>
<div class="container" >
    
 <div>   
<h2 align="center" style="color:white;padding-top:35px;">Sent Mails</h2>
<div align="right" ><a href="{{action('SendEmailController@ViewSendMail')}}" class="btn btn-success" style="margin-top:-75px;padding-left:20px;padding-right:20px;margin-top:-100px;font-weight:bold;font-size:14px">Send Email</a></div>
</div>
<br/>
@if($mess = Session::get('success') )
<div class="alert alert-success">
<a href="{{route('index')}}" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <p>{{$mess}}</p>
</div>
@endif

<br/>
<br/>
<font family="Georgia" size="3px">
<table class="table table-bordered" style="background-color:black;color:white;margin-top:-85px">
    <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Message</th>
    </tr>
    @foreach($email as $row)
    <tr>
        <td>{{$row['name']}}</td>
        <td>{{$row['email']}}</td>
        <td>{{$row['message']}}</td>
        
    </tr>
    @endforeach
    </table>
    </font>
    </div>
    </div>

      <footer class="footer" style="background-color:#024744;width:100%">
        <div class="container-fluid" >
          <nav >
            <div class="col-md-12">
                                  
                      <div id="footer-copyrights" >
                        
                          <p style="padding-left:358px;color:white">Copyright &copy; 2019 Rotaract Club of Badulla | All Rights Reserved.</p>
                        </div>  
                    
                    </div>
          </nav>
          
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  @yield('scripts')
</body>

</html>