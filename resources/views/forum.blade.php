<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>title</title>

  <!-- CSS  -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="/css/icons.css">

<style>
.messagestyle
{
  font: normal small-caps normal 20px/1.4 Georgia;
}
.datetimestyle
{
  font: normal small-caps normal 11px/1.4 Georgia;
}
</style>
</head>

<body  style="background-image:url('images/1.jpg');color:white;">

  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Start Bootstrap</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                  <li>
                      <a href="#">About</a>
                  </li>
                  <li>
                      <a href="#">Services</a>
                  </li>
                  <li>
                      <a href="#">Contact</a>
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
  </nav>

  <div class="container-fluid " style="margin-top:50px;" id="maincontainer" >
<div class = "row">
  <div class = "col-md-2"></div>
    <div class="col-md-10"  >
<div class="row" style="margin-top:30px;margin-left:30px;">
              <div class="row" id="msgbox">

            </div>

              <div class="row">
                <label for="comment">Comment:</label>
        <textarea class="form-control" rows="5" id="comment"></textarea>
        <button type="button" id="sendie" class="btn btn-primary">Send</button>
        <input type="hidden" id="forum_id" value="ETMA-101-1-1"/>
            </div>
</div>
          </div>

</div>

</div>







  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="js/forum.js"></script>

</body>
</html>
