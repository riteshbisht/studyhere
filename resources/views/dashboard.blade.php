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

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


  <style>
    .socialicon {
      width: 80px;
      height: 80px;
    }
  </style>

</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
 <div class="navbar-header">
   <a class="navbar-brand" href="#">Brand</a>
   <div>
  </nav>



<div class="container  " id="maincontainer" >
<div class="row" style="margin-top:50px;height:200px">
  <div class="col md-3   " style="height:inherit;"  >
    uhkjhkjh
  </div>

  <div class="col-md-3  com-md-offset-1" style=" height:inherit;">
ljkjkj
  </div>

  <div class="col-md-3  col-md-offset-1" style="height:inherit;">
    jhjhjhj
  </div>
</div>

<!------ second row--->


<div class="row" style="margin-top:50px;height:200px">
  <div class="col-md-3   " style="height:inherit;"  >
    uhkjhkjh
  </div>

  <div class="col-md-3  col-md-offset-1" style=" height:inherit;">
ljkjkj
  </div>

  <div class="col-md-3 col-md-offset-1" style="height:inherit;">
    jhjhjhj
  </div>
</div>

<!--- second row---->

</div>
<script>
$('document').ready(function(){
  $.ajax({url: "https://ritesh.app/api/v1/university", success: function(result){
      var array=result.topic[0];
      console.log
      $('#univeristy').append('<li><a href=""#><span>'+array.university_code+'</a></li>');

   }});
});
</script>
</body>

</html>
