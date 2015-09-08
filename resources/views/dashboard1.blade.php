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

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


  <style>



  /*==================================================
   * Effect 8
   * ===============================================*/
  .effect8
  {
    	position:relative;
      -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
         -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
              box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
  }
  .effect8:before, .effect8:after
  {
  	content:"";
      position:absolute;
      z-index:-1;
      -webkit-box-shadow:0 0 20px rgba(0,0,0,0.8);
      -moz-box-shadow:0 0 20px rgba(0,0,0,0.8);
      box-shadow:0 0 20px rgba(0,0,0,0.8);
      top:10px;
      bottom:10px;
      left:0;
      right:0;
      -moz-border-radius:100px / 10px;
      border-radius:100px / 10px;
  }
  .effect8:after
  {
  	right:10px;
      left:auto;
      -webkit-transform:skew(8deg) rotate(3deg);
         -moz-transform:skew(8deg) rotate(3deg);
          -ms-transform:skew(8deg) rotate(3deg);
           -o-transform:skew(8deg) rotate(3deg);
              transform:skew(8deg) rotate(3deg);
  }
.contributorname
{
  margin-left:20px;
  font-size:15px;
  font-family:cursive;
}
  #contributorlist > li
{
  padding:10px;
}


  </style>

</head>

<body style="background:white;">
  <div class="bg-info" style="position:fixed;width:200px;z-index:9999;height:200px;bottom:30px;right:30px;">
      <input type="textbox" />
  </div>
  <div style="position:fixed;width:20px;height:20px;bottom:2px;right:2px;background:black;">

  </div>
  <nav class="navbar navbar-inverse navbar-fixed-top" style="background:#424242 ;border:none;">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"  style="color:white;"href="#">tutelage</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right" style="color:white;">
              <li><a href="#">Dashboard</a></li>
              <li><a href="#">Settings</a></li>

              <li >
      					<a href="\home">{{ Auth::user()->name }}</a></li>
      				</li>
      						<li class=" navbarli"><a href="{{ url('/auth/logout') }}">Logout</a></li>
            </ul>
            <form class="navbar-form navbar-right">
              <input type="text" class="form-control" placeholder="Search...">
            </form>
          </div>
        </div>
      </nav>



<div class="container-fluid " style="margin-top:20px;" id="maincontainer" >
  <div class="row" style="height:800px;">
    <div class="col-md-2" style="background:#424242 ;height:inherit;border-right:2px solid #424242 ;">
      <div class="row">

      </div>
                <ul class="nav nav-sidebar sidebarul">
                  <li ><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                  <li class="active"><a href="/notes"><span> <img  class="icons" src="images/notesicon.png"></span><span class="sidebartext">Notes</span></a></li>
                  <li><a href="#"><span> <img  class="icons" src="images/videosicon.jpg"></span><span class="sidebartext">Videos</span></a></li>
                  <li><a href="#"><span> <img  class="icons" src="images/communityicon.jpg"></span><span class="sidebartext">Community</span></a></li>
                  <li><a href="#"><span> <img  class="icons" src="images/circleicon.png"></span><span class="sidebartext">Circle</span></a></li>
                  <li><a href="#"><span> <img  class="icons" src="images/starredicon.jpg"></span><span class="sidebartext">Starred</span></a></li>
                  <li><a href="#"><span> <img  class="icons" src="images/samplepapericon.png"></span><span class="sidebartext">Sample paper</span></a></li>
                  <li><a href="#"><span> <img  class="icons" src="images/syllabusicon.jpg"></span><span class="sidebartext">Syllabus</span></a></li>

            </ul>

    </div>
    <div class="col-md-10" >
<div class="row" style="margin-top:50px;height:200px;margin-right:30px;">
  <div class="col-md-5 col-md-offset-1 bg-info text-center " style="border-r:1px #424242 ;box-shadow: -1px -1px 2px #424242 ; height:inherit;background:#424242 ;"/>


        <div style="background:#424242">

          <span ><img class="maincontainericon" src="images/forumicon.png">  <span style="font-size:20px;color:white;">Forum</span></span>
        </div>
        <div class="row" style="color:white;">
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
           sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
        </div>
  </div>

  <div class="col-md-5 col-md-offset-1 bg-info text-center" style="box-shadow: -1px -1px 20px #424242 ;height:inherit;background:#424242 ;"  >

        <div style="width:100%;background:#424242 ;">

          <span class="text-left;"><img class="maincontainericon" src="images/contributorsicon.png">  <span style="font-size:20px;">Contributors</span></span>

        </div>

        <div class="row" >
      <ul class="text-left list-unstyled" id="contributorlist" style="color:white;">
        <li><img class="insidepanelicon" src="images/personicon.png"><span class="contributorname">Ajay Kumar</span> </li>
        <li> <img class="insidepanelicon" src="images/personicon.png"><span class="contributorname">Ritesh Bisht</span></li>
      </ul>
    </div>

  </div>


</div>

<!------ second row--->


<div class="row" style="margin-top:50px;height:200px;margin-right:30px;">
  <div class="col-md-5 col-md-offset-1 bg-info text-center box effect8" style="height:inherit;background:#424242 ;"  >

        <div style="background:#424242 ;color:white;;">
          <span ><img class="maincontainericon" src="images/searchicon.jpg">  <span style="font-size:20px;">Filter Search</span></span>

        </div>
        <div class="row" >
                  <div class="col-md-8 col-md-offset-2" style="margin-top:30px;">
              <input type="search" placeholder="Search" class="form-control" >
            </div>
        </div>
  </div>

  <div class="col-md-5 col-md-offset-1 bg-info text-center " style="box-shadow: -1px -1px 20px #424242 ;height:inherit;background:#424242"  >



        <div style="background:#424242">
            <h4 class="text-center">Uploads</h4>
        </div>
        <div class="row" >
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
           sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
        </div>
  </div>

</div>

<!--- second row ends---->


<div class="row" style="margin-top:50px;height:200px;margin-right:30px;margin-bottom:50px;">
  <div class="col-md-5 col-md-offset-1 bg-info" style="height:inherit;background:#424242 ;"  >


        <div style="background:#424242 ;">
            <h4 class="text-center">Upload</h4>
        </div>
        <div class="row" >
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
           sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
        </div>
  </div>

  <div class="col-md-5 col-md-offset-1 bg-info " style="height:inherit;background:#424242 ;"  >
        <div style="background:#424242 ;">
            <h4 class="text-center">Notes</h4>
        </div>
        <div class="row" >
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
           sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
        </div>
  </div>


</div>

<!--third row ends-->


<!-- fourth row start-->



<!-- fourth row ends-->
</div>

</div>

</div>

<div class="container-fluid">
  <div class="row" style="height:300px;">
    <div class="col-md-12 bg-info" style="height:inherit;background:#006699;"  >



    </div>


  </div>
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
