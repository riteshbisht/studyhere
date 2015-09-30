<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile Setting</title>

  <!-- CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

  <link rel="stylesheet" href="  https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/4.10.1/bootstrap-social.min.css">

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
  
</head>
<body style="background-image:url(images/1.jpg);">
<div class="container" style="padding-top: 20px;">
  <h1 class="page-header" style="color:white;">Edit Profile</h1>
  <div class="row">
    <!-- left column -->
    <div class="col-md-4 col-sm-6 col-xs-12">
      <div class="text-center">
        <img src="" class="avatar img-circle img-thumbnail" alt="your image" style="height:150px; width:150px; radius:40px">
        <br>
        <br>
        <input type="file" class="text-center center-block well well-sm">
      </div>
    </div>
    <!-- edit form column -->
    <div class="col-md-8 col-sm-6 col-xs-12 personal-info">
      
      <h2 align = "center" style="color:white;">Personal Info</h2>
      <form class="form-horizontal" role="form">
        <div class="form-group">
          <label class="col-md-3 control-label" style="color:white;">Username:</label>
          <div class="col-md-8">
            <input class="form-control" value="" type="text" placeholder="Username">
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-lg-3 control-label" style="color:white;">Email:</label>
          <div class="col-lg-8">
            <input class="form-control" value="" type="text" placeholder="Email">
          </div>
        </div>
        <div class="form-group">
          <label class="col-lg-3 control-label" style="color:white;">Time Zone:</label>
          <div class="col-lg-8">
            <div class="ui-select">
              <select id="user_time_zone" class="form-control">
                <option value="Hawaii">(GMT-10:00) Hawaii</option>
                <option value="Alaska">(GMT-09:00) Alaska</option>
                <option value="Pacific Time (US &amp; Canada)">(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                <option value="India">(GMT +05:30) India </option>
              </select>
            </div>
          </div>
        </div>
        
        <div class="form-group">
          <label class="col-md-3 control-label" style="color:white;">Password:</label>
          <div class="col-md-8">
            <input class="form-control" value="" type="password" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label" style="color:white;">Confirm password:</label>
          <div class="col-md-8">
            <input class="form-control" value="" type="password" placeholder="Confirm Password">
          </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label"></label>
          <div class="col-md-8">
            <input class="btn btn-primary" value="Save Changes" type="button">
            <span></span>
            <input class="btn btn-default" value="Cancel" type="reset">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>





</body>
</html>