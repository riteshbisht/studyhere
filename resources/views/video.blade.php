<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>title</title>

  <!-- CSS  -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">


</head>

<body>

  <nav class="light-blue lighten-1" role="navigation">
		<div class="nav-wrapper container-fluid"><a id="logo-container" href="#" class="brand-logo">Logo</a>
			<ul class="right hide-on-med-and-down">
				<li class="dropdown navbarli">
					<a class='dropdown-button' href="\home">{{ Auth::user()->name }} <span class="caret"></span></a>
				</li>
						<li class=" navbarli"><a href="{{ url('/auth/logout') }}">Logout</a></li>
            	<li class=" navbarli active"><a href="{{ url('/videos') }}">Videos</a></li>

			</ul>

			<ul id="nav-mobile" class="side-nav">
				<li><a href="#">Navbar Link</a></li>

			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
</nav>

<div class="container-fluid">
  <div class="row">
    <ul>
    @foreach ($allvideos as $video)
      <li>
        <div class="row ">
          <div class="col s3 center-align">
              <img src='http://img.youtube.com/vi/{{$video->youtubevideoid}}/1.jpg'>
          </div>
          <div class="col s9">
          <a href="/videos/{{$video->youtubevideoid}}">  <div class="row">
                <h5>{{$video->title}}</h5>
            </div></a>
            <div class="row">
                <h6>{{$video->description}}</h6>
            </div>


          </div>
        </div>


    </li>
    @endforeach
  </ul>
  </div>

  <div>
</div>
</div>
</body>
<script>

</script>
</html>
