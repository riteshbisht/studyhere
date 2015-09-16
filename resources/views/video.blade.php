<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>title</title>

  <!-- CSS  -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css//signin/sb-admin-2.css">
  <link rel="stylesheet" href="css/signin/dash.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/signin/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/signin/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/signin/login.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <!-- BEGIN GLOBAL MANDATORY STYLES -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="js/signin/materialize.js"></script>
  <script src="js/signin/materialize.min.js"></script>
  <script src="js/signin/dash_js.js"></script>
</head>

<body>

  <nav class="navbar-fixed  sidebar-menu-collapsed grey darken-4">
 <div class="nav-wrapper container-fluid"><a id="logo-container"  class="brand-logo center"> tutelage</a>

 <div class="row">
 <div class="col-md-1 col-xs-2">
  <a href='#menu-toggle' id='justify-icon'>
     <span class='glyphicon glyphicon-align-justify btn' id="side-button"></span>
   </a>
 </div>

 <ul class="nav navbar-nav navbar-right" style="color:white;">
   <li><a href="#">Dashboard</a></li>
   <li><a href="#">Notification</a></li>
       <li class=" navbarli"><a href="{{ url('/auth/logout') }}">Logout</a></li>
 </ul>

   <ul id="nav-mobile" class="side-nav">
     <li><a href="#">About Us</a></li>
   </ul>
   <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
 </div>






     </div><!--row closed of the navbar-->

   </div> <!--container-fluid closed-->
 </nav>



<div class="container-fluid" style="margin-top:10px;" >
  <div class="row" >

    @foreach ($allvideos as $video)


        <div class="row" style="margin-top:10px;">
          <div class="col-md-2 center-align" style="height:180px;box-shadow:-3px 3px 30px black;">

              <img  style="width:100%;height:inherit;"src='http://img.youtube.com/vi/{{$video->youtubevideoid}}/1.jpg'>

          </div>
          <div class="col-md-10" style=" height:180px;box-shadow:-3px 3px 20px black;">

            <div class="row">
              <a href="/videos/{{$video->youtubevideoid}}">
                <h5>{{$video->title}}</h5>
                    </a>
            </div>


              <div class="row">
                <h6>{{$video->description}}</h6>
              </div>

                <div class="row">
                    <div class="col-md-2 ">
                            views:
                   </div>

                    <div class="col-md-7">
                      <button>like</button>
                      <button>dislike</button>
                    </div>

                    <div class="col-md-3">
                      stars
                    </div>


              </div>




          </div>
        </div>



    @endforeach

  </div>

  <div>
</div>
</div>
</body>
<script>

</script>
</html>
