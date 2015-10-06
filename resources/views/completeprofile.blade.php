<!DOCTYPE html>
<html lang="en">

<head>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Shop Homepage - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background:url('images/1.jpg')">
<div class="container">

    <div class="row text-center">
      <h5>Please complete you profile so that we can help you better!!!</h5>
    </div>
    <div class="row">
    <form method="post" action="{{url('completeprofile')}}">
      <div class="row text-center">

            <div class="input-field col-md-12">
              <h6>YOUR University</h6>
              <label>Select University</label>
              <select class="form-control" id="university_dropdown">
                  <option class="university_list dropdownli">select University</option>
              </select>
              <br>
              </div>

      </div>

      <div class="row center-align">

            <div class="input-field col-md-12">
              <label>Select Course</label>
              <select class="form-control" id="university_dropdown">
                  <option class="university_list dropdownli">select University</option>
              </select>
              <br>
              </div>

      </div>
      <div class="row center-align">

            <div class="input-field col-md-12">
              <h6>YOUR Branch</h6>
             <select class="browser-default">
               <option value="1" selected>IT</option>
             </select>
              </div>

      </div>
      <div class="row center-align">
        <input type="submit"class="btn btn-lg orange"></button>
              <button class="btn btn-lg orange"><a href="{{url('/dashboard')}}">Skip</a></button>

              <button class="btn btn-lg orange"><a href="{{url('/dasboard')}}">Skip</a></button>
      </div>
    </form>
</div>
</div>
</body>

</html>
