<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>title</title>

  <!-- CSS  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">


</head>

<body style="background-image:url('{{url('images/1.jpg')}}')">





    <div class="container">
<div class="row">
  <div class="row center">
    <img style="width:30%;height:30%;" src="{{url('images/logo')}}"/>
  </div>
  <h1 class="header center" style="font-family:Lucida Console;color:black;">TUTELAGE</h1>

</div>
      <div class="row center center">
        <h5 class="header col-md-12" style="color:white;font-size:25px;">{{$message}}</h5>
      </div>

      <div class="row center">

        <a href="{{url('SignIn')}}" id="download-button" style="border-radius:20px;" class="btn-large waves-effect waves-light orange">{{$button_message}}</a>

      </div>
    </div>





  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

</body>

</html>
