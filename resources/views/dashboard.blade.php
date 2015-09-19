<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="" name="description"/
  <meta content="" name="author"/>
  <title>Tutelage</title>

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
<!-- END GLOBAL MANDATORY STYLES -->



<link rel="shortcut icon" href="favicon.ico"/>


</head>
<body style="background-image:url(images/1.jpg);">

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


<!-- side bar fixed-->

<div class="container-fluid grey darken-4" id="side-bar">

  <div class="row" style="height:700px;">
      <ul>
        <li class="profile-userpic">

          <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="hi">


        </li>

      </ul>

          <div class="profile-usertitle-name">
            USERNAME
          </div>
      <div class="profile-usermenu">
          <ul class="nav">
            <li>
              <a href="{{url('/dashboard')}}">
              <i class="glyphicon glyphicon-home"></i>
              Dashboard</a>
            </li>
            <li>
              <a href="settings.html">
              <i class="glyphicon glyphicon-user"></i>
              Profile Settings </a>
            </li>
            <li>
              <a href="report.html">
              <i class="glyphicon glyphicon-warning-sign"></i>
              Report </a>
            </li>
          </ul>
        </div>
  </div>


</div>

<!-- side bar ends -->



<div class="main-container" >

  <div class="row"> <!-- start of the row inside the main container-->

    <div class="col-md-1"></div>

    <div class="col-md-10" id="button-panel">

        <div class="row ">
        <div class="col-md-4  col-sm-12 text-center"  >  <a href="{{url('/notes')}}"><button type="button" class="btn"  id="button1" ><span class="glyphicon glyphicon-book">&nbsp;NOTES</span></button></a></div>
        <div class="col-md-4  col-sm-12 text-center"  >  <a href="{{url('/forum')}}" ><button type="button" class=" btn  " id="button1" ><span class="glyphicon glyphicon-comment">&nbsp;FORUM</span></button></a></div>
        <div class="col-md-4 col-sm-12 text-center"  >  <a href="analytics.html"> <button type="button" class=" btn   " id="button1" ><span class="glyphicon glyphicon-stats">&nbsp;GOOGLE
          <br>ANALYTICS</span></button></a></div>


        </div>
      <!--start of the second row-->
        <div class="row">
          <div class="col-md-4 col-sm-12 text-center"  > <a href="{{url('/videos')}}"> <button type="button" class=" btn  " id="button1" ><span class="glyphicon glyphicon-facetime-video">&nbsp;VIDEOS</span></button></a></div>


      <div class="col-md-4  col-sm-12 text-center"  >  <a href="filter.html">   <button type="button" class=" btn  " id="button1" ><span class="glyphicon glyphicon-search">&nbsp;FILTER SEARCH</SPAN></button></a></div>

        <div class="col-md-4 col-sm-12 text-center"  > <a href="{{url('/syllabus')}}">   <button type="button" class=" btn  " id="button1" ><span class="glyphicon glyphicon-th-list">&nbsp;SYLLABUS</span></button></a></div>


        </div>
      <!--start of the third row-->
        <div class="row">
      <div class="col-md-4  col-sm-12 text-center"  >     <button type="button"  class=" btn  " id="button1" ><span class="glyphicon glyphicon-flag">&nbsp;CONTRIBUTION</span></button></div>

       <div class="col-md-4  col-sm-12 text-center"  > <button type="button" class="btn  " id="button1" ><span class="glyphicon glyphicon-globe">&nbsp;Groups</span></button></div>

      <div class="col-md-4  col-sm-12 text-center"  >     <button type="button" class="btn  " id="button1" ><span class="glyphicon glyphicon-road">&nbsp;BRANCH <br>CONTRIBUTION<span></button></div>
        </div>




</div> <!--div closed for the col-md-10-->





<div class="col-md-1"></div>





</div> <!-- end of the row of the maincontainer-->

</div> <!-- end of the maincontainer-->









<footer>
<div class=" foot grey darken-4">
<div class="container"><h6>Made By TUTELAGE</h6></div>
</div>
</footer>















  <!--  Scripts-->
  <!-- Menu Toggle Script -->
    <script>
      $("#side-button").click(function(){
       $("#side-bar").animate({
         width: "toggle"
     });
      });
    </script>

    <script>
    $(document).ready(function(){
      $("#side-bar").hide();
    });
    </script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/login.js"></script>
  </body>
</html>
