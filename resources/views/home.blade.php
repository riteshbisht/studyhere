<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>title</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/login.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <style>
    .socialicon {
      width: 80px;
      height: 80px;
    }
  </style>

</head>

<body>

  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">Logo</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Navbar Link</a></li>
      </ul>

      <ul id="nav-mobile" class="side-nav">
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

  <!--
  <!-- Modal Structure -->
  <div id="modal1" class="modal" style="width:70%" ;>
    <div class="modal-content">
      <div class="container-fluid">

        <a href="#close" id="close_button" title="Close" class="close" style="	position:absolute;right:6px;top:6px;">X</a>

        <div class="row card-panel none z-depth-5">
          <div class="col s6 m6 l6 center-align">
            <a href="#" class="btn-large  orange active " id="login-box-link">Login</a>
          </div>
          <div class="col s6 m6 l6 center-align">
            <a href="#" class=" btn-large orange " id="signup-box-link">Sign Up</a>
          </div>
        </div>

        <!-- end of first row-->

        <div class="row  " id="easylogin">
          <div class="row " style="display:block;">
            <a href="/login/fb">
              <div class="col s6 m6 l6">
                <div class="row center-align">
                  <img class="socialicon" src="images/fb.png" />
                </div>
                <div class="row center-align">
                  Login in with facebook
                </div>
              </div>
            </a>

            <a href="#">
              <div class="col s6 m6 l6">
                <div class="row center-align">
                  <img class="socialicon" src="images/gplus.png" />
                </div>
                <div class="row center-align">
                  Login in with Google
                </div>
              </div>
            </a>

          </div>
        </div>
          <!-- end of second row-->

          <div class="row">
            <div class="col s6 m6 l6 offset-s3 offset-m3 offset-l3 ">
              <form class="email-login" method="POST" action="{{ url('/auth/login') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">email</i>
                    <input id="email" type="email" class="validate" name="email">
                    <label for="email">Email</label>
                  </div>
                </div>

                <div class="row">
                  <div class="input-field col s12">
                    <i class="material-icons prefix">vpn_key</i>
                    <input id="password" type="password" class="validate" name="password">
                    <label for="password">Password</label>
                  </div>
                </div>

                <div >
                  <button class="btn btn-lg">Log in</button>
                </div>
                <div >
                  <a href="#" class="forgot-password">Forgot password?</a>
                </div>
              </form>
            </div>

          </div>
          <!-- end of third row-->
          <div class="row">
            <div class="col s6 m6 l6 offset-s3  offset-m3 offset-l3 ">
            <form class="email-signup" method="POST" action="{{ url('/auth/register') }}">

              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">account_circle</i>
                  <input name="name" type="text" class="validate">
                  <label for="first_name">Name</label>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">email</i>
                  <input id="email" type="email" class="validate" name="email">
                  <label for="email">Email</label>
                </div>
              </div>

              <div class="u-form-group">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              </div>
              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">vpn_key</i>
                  <input id="password" type="password" class="validate" name="password">
                  <label for="password">Password</label>
                </div>
              </div>

              <div class="row">
                <div class="input-field col s12">
                  <i class="material-icons prefix">vpn_key</i>
                  <input id="password" type="password" class="validate" name="password_confirmation">
                  <label for="password">Password</label>
                </div>
              </div>



              <div class="bt btn-lg">
                <button>Sign Up</button>
              </div>

            </form>
          </div>
        </div>
          <!--end of fourth row-->

        </div>
      </div>
      <!-- end of container -->
    </div>

  </div>


  <!---modal ends-->

  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br>
      <br>
      <div>
        @if($errors->has()) @foreach ($errors->all() as $error)

        <div>{{ $error }}</div>
        @endforeach @endif
      </div>

      <h1 class="header center orange-text">TUTELAGE</h1>
      <div class="row center">
        <h5 class="header col s12 light">describe concept in one line</h5>
      </div>
      <div class="row center">

        <a href="#openModal" id="download-button" class="btn-large waves-effect waves-light orange">Get started</a>


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
        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">view_module</i></h2>
            <h5 class="center">View notes online</h5>

            <p class="light">some description</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
            <h5 class="center">Connect with various students</h5>

            <p class="light">some description</p>
          </div>
        </div>

        <div class="col s12 m4">
          <div class="icon-block">
            <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
            <h5 class="center">Easy to work with</h5>

            <p class="light">some description</p>
          </div>
        </div>
      </div>

    </div>
    <br>
    <br>

    <div class="section">

    </div>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Company Bio</h5>
          <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Settings</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
        <div class="col l3 s12">
          <h5 class="white-text">Connect</h5>
          <ul>
            <li><a class="white-text" href="#!">Link 1</a></li>
            <li><a class="white-text" href="#!">Link 2</a></li>
            <li><a class="white-text" href="#!">Link 3</a></li>
            <li><a class="white-text" href="#!">Link 4</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
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
