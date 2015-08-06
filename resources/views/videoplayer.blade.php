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
            	<li class=" navbarli"><a href="{{ url('/videos') }}">Videos</a></li>

			</ul>

			<ul id="nav-mobile" class="side-nav">
				<li><a href="#">Navbar Link</a></li>

			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
		</div>
</nav>

<div class="container-fluid">
  <div class="row center-align">
    <div id="ytplayer"></div>

  </div>

  <div>
  <script>
    // Load the IFrame Player API code asynchronously.
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/player_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

    // Replace the 'ytplayer' element with an <iframe> and
    // YouTube player after the API code downloads.
    var player;
    function onYouTubePlayerAPIReady() {
      player = new YT.Player('ytplayer', {
        height: '390',
        width: '640',
        videoId: '{{$videoid}}'
      });
    }
  </script>

</body>
<script>

</script>
</html>
