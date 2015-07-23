<html>

<head>
  <title>Home</title>

  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Carter+One">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Aldrich">
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
  <style>
    html {
      font-family: 'Aldrich';
      color: black;
      ;
    }

    #hottopic1,
    #hottopic2,
    #hottopic3 {
      font-family: sans-serif;
    }

    #hottopic3content,
    #hottopic1content,
    #hottopic2content {
      font-family: sans-serif;
      font-size: 16px;
    }

    .line1 {
      width: 1900px;
      height: 100px;
      ;
      border-bottom: 1px solid green;
      -webkit-transform: translateY(20px) translateX(5px) rotate(-8deg);
      position: absolute;
      top: inherit;
    }
  </style>
</head>

<body style="background:url('images/back.jpg');background-size:100% 100%;background-repeat:no-repeat;background-attachment:fixed;">

  <div class="navbar-fixed ">
    <nav>
      <div class="nav-wrapper green accent-2">
        <a href="#!" class="brand-logo left black-text">STUDYHERE</a>
        <ul class="right hide-on-med-and-down">

          <li><a href="{{url('auth/login')}}" class="black-text right">LOGIN</a></li>
          <li><a href="{{url('auth/register')}}" class="black-text right">SIGN UP</a></li>
        </ul>
      </div>
    </nav>
  </div>

</body>



</html>
