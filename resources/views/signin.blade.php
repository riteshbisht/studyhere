<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TUTELAGE Login</title>

  <!-- CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

  <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.10.1/bootstrap-social.min.css
">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css">

  <link rel="stylesheet" href="css/signin/dash.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="css/signin/style1.css" media="screen,projection" />

  <link rel="stylesheet" href="css/signin/form-elements.css" media="screen,projection" />

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

  <!-- Favicon and touch icons -->
  <link rel="shortcut icon" href="favicon.ico">
  <style>
    .signupcolor {
      color: white;
    }
  </style>
</head>

<body style="background-image:url('images/1.jpg')">


  <!--    <div class="row">
        <div>
          @if($errors->has()) @foreach ($errors->all() as $error)
          <div>{{ $error }}</div>
          @endforeach @endif
        </div>
      </div> -->


  <!-- Top content -->
  <div class="top-content">

    <div class="inner-bg">
      <div class="container" style="padding:0px">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <div class="panel panel-info" style="background:none;border:none;">
            <div class="panel-heading" style="background:none;">
              <div class="panel-title">
                <h3 style="color:white;">Sign In</h3>
              </div>

            </div>

            <div style="padding-top:30px border:none;" class="panel-body">

              <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

              <form id="loginform" data-toggle="validator" role="form" class="form-horizontal" role="form" method="post" action="{{ url('/auth/login') }}">

                <div style="margin-bottom: 25px" class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="login-username" type="email" class="form-control" name="email" value="" placeholder="email" requiired>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>

                <div style="margin-bottom: 25px" class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="login-password" type="password" class="form-control" name="password" placeholder="password" minlength="6" required>
                </div>



                <div class="input-group">
                  <div class="checkbox">
                    <label>
                      <input id="login-remember" type="checkbox" name="remember" value="1">
                      <p style="color:white;">Remember me</p>
                    </label>
                  </div>
                </div>


                <div style="margin-top:10px" class="form-group">
                  <!-- Button -->
                  <div class="col-sm-12 controls">
                    <button typ="submit" id="btn-login" style="background:orange" class="btn btn-success"> Login </button>
                  </div>
                </div>
              </form>
              <div class="row">
                <div class="col-md-11">
                  <a href="/login/fb" class="btn-lg btn-block btn-social btn-facebook">
                    <i class="fa fa-facebook"></i> Sign in with Facebook
                  </a>
                  <br>

                  <a href="/google" class="btn-lg btn-block btn-social btn-google">
                    <i class="fa fa-google"></i> Sign in with Google
                  </a>
                </div>
              </div>
              <div>
                <div class="col-md-12 control">
                  <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%">
                    <h5>
                      <p style="color:white;"> Don't have an account!</p>
                      <h5>
                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                          <h5>
                            <p style="color:white;"> Sign Up Here</p>
                          </h5>
                        </a>
                  </div>
                </div>
              </div>




            </div>
          </div>
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
          <div class="panel panel-info" style="background:none;border:0px solid #757575 ">
            <div class="panel-heading" style="background:none;">
              <div class="panel-title" style="color:white;">Sign Up</div>
              <div style="float:right; font-size: 85%; position: relative; top:-20px">
                <a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()">
                  <p style="color:white; ">Sign In</p>
                </a>
              </div>
            </div>
            <div class="panel-body">
              <form id="signupform" data-toggle="validator" class="form-horizontal" method="post" role="form" action="{{url('auth/register')}}">

                <div id="signupalert" style="display:none" class="alert alert-danger">
                  <p>Error:</p>
                  <span></span>
                </div>




                <div style="margin-bottom: 25px" class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-eye-open"></i></span>
                  <input id="login-password" type="text" class="form-control" data-minlength="3" name="name" placeholder="username" minlength="6" required>
                </div>


                <div style="margin-bottom: 25px" class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  <input id="login-username" type="email" class="form-control" name="email" value="" placeholder="email" requiired>
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>



                <div style="margin-bottom: 25px" class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  <input id="login-password" type="password" class="form-control" name="password" data-minlength="6" placeholder="password" minlength="6" required>
                </div>

                <div style="margin-bottom: 25px" class="input-group">
                  <span class="input-group-addon"><i class="glyphicon glyphicon-ok"></i></span>
                  <input id="login-password" type="password" class="form-control" data-minlength="6" name="password_confirmation" placeholder="confirm password" minlength="6" required>
                </div>



                <div class="form-group">
                  <!-- Button -->
                  <div class=" col-md-12 text-center">
                    <button style="background:orange" id="btn-signup" type="submit" class="btn btn-info">Register</button>

                  </div>
                </div>

                <div style="border-top: 1px solid #999; padding-top:20px" class="form-group">

                  <div class="col-md-11">
                    <a href="/login/fb" class="btn-lg btn-block btn-social btn-facebook">
                      <i class="fa fa-facebook"></i> Sign in with Facebook
                    </a>
                    <br>

                    <a href="/google" class="btn-lg btn-block btn-social btn-google">
                      <i class="fa fa-google"></i> Sign in with Google
                    </a>
                  </div>

                </div>



              </form>
            </div>
          </div>



        </div>

      </div>
      <div style="background:none;text-align:center;color:red;" class="row">
        <div>
          @if($errors->has()) @foreach ($errors->all() as $error)

          <div>
            <h4>{{ $error }}
              <h4>
          </div>
          @endforeach @endif
        </div>
      </div>

    </div>


    <!-- Javascript -->
    <script src="js/signin/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"></script>
    <script src="js/signin/jquery.backstretch.min.js"></script>
    <script src="js/signin/jquery-1.11.1.js"></script>
    <script src="js/signin/jquery-1.11.1.min.js"></script>
    <script src="js/signin/jquery.backstretch.js"></script>
    <script src="js/signin/scripts.js"></script>

    <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

</body>

</html>
