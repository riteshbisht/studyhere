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


</head>

<body>
<script>
  logInWithFacebook = function() {
    FB.login(function(response) {
      if (response.authResponse) {

      window.location = "http://studyhere-audiodict.rhcloud.com/fb-login";
      } else {
        alert('User cancelled login or did not fully authorize.');
      }
    });
    return false;
  };
  window.fbAsyncInit = function() {
    FB.init({
      appId: '709854915792963',
      cookie: true, // This is important, it's not enabled by default
      version: 'v2.2'
    });
  };

  (function(d, s, id){
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>


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
  <div class="section no-pad-bot" id="index-banner">
    <div class="container">
      <br>
      <br>
      <h1 class="header center orange-text">HEADING</h1>
      <div class="row center">
        <h5 class="header col s12 light">describe concept in one line</h5>
      </div>
      <div class="row center">





        <a href="#openModal" id="download-button" class="btn-large waves-effect waves-light orange">Get started</a>

        <div id="openModal" class="modalDialog">
          <div>
            <a href="#close" title="Close" class="close">X</a>
            <br>
            <br>
            <div class="login-box">
              <div class="lb-header">
                <a href="#" class="active" id="login-box-link">Login</a>
                <a href="#" id="signup-box-link">Sign Up</a>
              </div>
              <div class="social-login">
                <a href="javascript:void(0)" onClick="logInWithFacebook()">
        <i class="fa fa-facebook fa-lg"></i>
        Login in with facebook
      </a>
                <span>  <a href="#">
                    <i class="fa fa-google-plus fa-lg"></i> log in with Google
                  </a></span>


              </div>
              <form class="email-login">
                <div class="u-form-group">
                  <input type="email" placeholder="Email" />
                </div>
                <div class="u-form-group">
                  <input type="password" placeholder="Password" />
                </div>
                <div class="u-form-group">
                  <button>Log in</button>
                </div>
                <div class="u-form-group">
                  <a href="#" class="forgot-password">Forgot password?</a>
                </div>
              </form>
              <form class="email-signup">
                <div class="u-form-group">
                  <input type="email" placeholder="Email" />
                </div>
                <div class="u-form-group">
                  <input type="password" placeholder="Password" />
                </div>
                <div class="u-form-group">
                  <input type="password" placeholder="Confirm Password" />
                </div>
                <div class="u-form-group">
                  <button>Sign Up</button>
                </div>
              </form>
            </div>

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

</body>

</html>
