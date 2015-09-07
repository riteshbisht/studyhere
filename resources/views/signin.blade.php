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

  <link rel="stylesheet" href="css/signin/dash.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link  rel="stylesheet" href="css/signin/style1.css" media="screen,projection"/>

  <link  rel="stylesheet" href="css/signin/form-elements.css" media="screen,projection"/>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="favicon.ico">
<style>
.signupcolor
{
color:white;
}
</style>
    </head>

    <body style="background-image:url('images/1.jpg')">


      <div class="row">
        <div>
          @if($errors->has()) @foreach ($errors->all() as $error)

          <div>{{ $error }}</div>
          @endforeach @endif
        </div>
      </div>
        <!-- Top content -->
        <div class="top-content">

            <div class="inner-bg">
                   <div class="container">
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
            <div class="panel panel-info" style="background:#757575;border:0px solid #757575 " >
                    <div class="panel-heading" style="background:#212121;">
                        <div class="panel-title" style="color:white;">Sign In</div>

                    </div>

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>

                        <form id="loginform" class="form-horizontal" role="form" method="post" action="{{ url('/auth/login') }}">

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="username or email">
                                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                  </div>

                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>



                            <div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember"  value="1"> <p style="color:white;">Remember me</p>
                                        </label>
                                      </div>
                                    </div>


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->
                                    <div class="col-sm-12 controls">
                                      <button typ="submit" id="btn-login" class="btn btn-success"> Login </button>
                                      <button id="btn-fblogin" href="/login/fb" style="background:#3b5998;" class="btn btn-primary">Login with Facebook</button>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                  <p style="color:white;">          Don't have an account!</p>
                                        <a href="#" onClick="$('#loginbox').hide(); $('#signupbox').show()">
                                        <p style="color:white;">       Sign Up Here</p>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </form>



                        </div>
                    </div>
        </div>
        <div id="signupbox" style="display:none; margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                    <div class="panel panel-info" style="background:#757575;border:0px solid #757575 ">
                        <div class="panel-heading" style="background:#212121;">
                            <div class="panel-title" style="color:white;"  >Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-20px"><a id="signinlink" href="#" onclick="$('#signupbox').hide(); $('#loginbox').show()"><p style="color:white; ">Sign In</p></a></div>
                        </div>
                        <div class="panel-body"  >
                            <form id="signupform" class="form-horizontal" role="form" >

                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>



                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label signupcolor">Email</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="email" placeholder="Email Address">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label signupcolor">First Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="firstname" placeholder="First Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label signupcolor">Last Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="lastname" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label signupcolor">Password</label>
                                    <div class="col-md-9">
                                        <input type="password" class="form-control" name="passwd" placeholder="Password">
                                    </div>
                                </div>



                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-signup" type="button" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp Sign Up</button>
                                        <span style="margin-left:8px;">or</span>
                                    </div>
                                </div>

                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">

                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                    </div>

                                </div>



                            </form>
                         </div>
                    </div>




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
