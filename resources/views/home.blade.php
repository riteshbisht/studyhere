<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>Tutelage</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/login.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link rel="shortcut icon" type="image/png" href="images/logo.png"/>
  <style>
    .socialicon {
      width: 80px;
      height: 80px;
    }
  </style>

</head>

<body style="background-image:url('images/1.jpg')">

  <nav class="grey darken-4" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo"> Home</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">About Us</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">About Us</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <!--
  <!-- Modal Structure -->


  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br>
      <br>
      <div>
        @if($errors->has()) @foreach ($errors->all() as $error)

        <div>{{ $error }}</div>
        @endforeach @endif
      </div>

      <div class="row center">
        <img style="width:30%;height:30%;" src="images/logo"/>
      </div>
      <h1 class="header center black-text" style="font-family:Lucida Console;">TUTELAGE</h1>

      <div class="row center">
        <h5 class="header col s12 light">A one stop shop for all your academic needs</h5>
      </div>
      <div class="row center">

        <a href="{{url('SignIn')}}" id="download-button" style="border-radius:20px;" class="btn-large waves-effect waves-light orange">Get started</a>


      </div>
    </div>










  </div>
  <br>
  <br>

  </div>
  </div>


  <div class="container">
    <div class="section">

      <!--   Icon Section   -->
      <div class="row">
        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">view_module</i></h2>
            <h5 class="center">View notes online</h5>


          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Connect with various students</h5>


          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>


          </div>
        </div>

        <div class="col s12 m3">
          <div class="icon-block">
            <h2 class="center black-text"><i class="material-icons">videocam</i></h2>
            <h5 class="center">Video Lectures</h5>


          </div>
        </div>


      </div>

    </div>
    <br>
    <br>

    <div class="section">

    </div>
  </div>

  <footer class="page-footer grey darken-4">

    <div class="footer-copyright">
      <div class="container">
        Made by <a class="white-text text-lighten-3" href="http://madspot.in">Tutelage</a>
      </div>
    </div>
  </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>
  <script src="js/login.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>

  <script>
    $(document).ready(function() {
      // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered

      $("#download-button").click(function() {
        $('#modal1').openModal();


      });

      $("#close_button").click(function() {
        $('#modal1').closeModal();


      });
      $("#signup-box-link").click(function() {
        $("#easylogin").fadeOut(100);
          $(".email-login").fadeOut(100,function(){
              $(".email-signup").fadeIn(700);

          });





        // $("#login-box-link").toggleClass("active");
        // $("#signup-box-link").toggleClass("active");
      });

      $("#login-box-link").click(function() {
        $("#easylogin").fadeIn(700);


        $(".email-signup").fadeOut(100,function(){

              $(".email-login").fadeIn(700);
        });

        $("#login-box-link").toggleClass("active");
        $("#signup-box-link").toggleClass("active");
      });

    });
  </script>

</body>

</html>
