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
  .maincontainericon{
  width:40px;
  height:40px;
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
  .sidebartext
  {
font-family:cursive;
font-size:14px;
padding:10px;
  }


.insidepanelicon
{
width:30px;
height:30px;
}

  .icons
  {
    width:40px;
    height:40px;
    border-radius:5px;
    ;
  }
  .borderradius
  {
    padding:20px;
    border-radius:40px;
  }
    .socialicon {
      width: 80px;
      height: 80px;
    }
  </style>

</head>

<body>
  <div class="bg-info" style="position:fixed;width:200px;z-index:9999;height:200px;bottom:30px;right:30px;">
      <input type="textbox" />
  </div>
  <div style="position:fixed;width:20px;height:20px;bottom:2px;right:2px;background:black;">

  </div>
  <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">tutelage</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
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
    <div class="col-md-2" style="background:#dfded2;height:inherit;border-right:2px solid #dfded2;">
      <div class="row">

      </div>
                <ul class="nav nav-sidebar sidebarul">
                  <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                  <li><a href="#"><span> <img  class="icons" src="images/notesicon.png"></span><span class="sidebartext">Notes</span></a></li>
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
  <div class="col-md-5 col-md-offset-1 bg-info text-center " style="border-r:1px solid rgba(239, 90, 33, 0.85);box-shadow: -1px -1px 2px rgba(239, 90, 33, 0.85); height:inherit;background:rgba(244, 90, 33, 0.85);"  >


        <div style="background:rgba(239, 90, 33, 0.85);">

          <span ><img class="maincontainericon" src="images/forumicon.png">  <span style="font-size:20px;">Forum</span></span>
        </div>
        <div class="row" >
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
           sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
        </div>
  </div>

  <div class="col-md-5 col-md-offset-1 bg-info text-center" style="box-shadow: -1px -1px 20px #58589f;height:inherit;background:#58589f;"  >

        <div style="width:100%;background:#394277;">

          <span class="text-left;"><img class="maincontainericon" src="images/contributorsicon.png">  <span style="font-size:20px;">Contributors</span></span>

        </div>

        <div class="row" >
      <ul class="text-left list-unstyled" id="contributorlist">
        <li><img class="insidepanelicon" src="images/personicon.png"><span class="contributorname">Ajay Kumar</span> </li>
        <li> <img class="insidepanelicon" src="images/personicon.png"><span class="contributorname">Ritesh Bisht</span></li>
      </ul>
        </div>

  </div>


</div>

<!------ second row--->


<div class="row" style="margin-top:50px;height:200px;margin-right:30px;">
  <div class="col-md-5 col-md-offset-1 bg-info text-center" style="box-shadow: -1px -1px 20px #588870;height:inherit;background:#588870"  >

        <div style="background:#408870">
          <span ><img class="maincontainericon" src="images/searchicon.jpg">  <span style="font-size:20px;">Filter Search</span></span>

        </div>
        <div class="row" >
                  <div class="col-md-8 col-md-offset-2" style="margin-top:30px;">
              <input type="search" placeholder="Search" class="form-control" >
            </div>
        </div>
  </div>

  <div class="col-md-5 col-md-offset-1 bg-info text-center " style="box-shadow: -1px -1px 20px #5A5A56;height:inherit;background:#5A5A56"  >



        <div style="background:#4C5A56">
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
  <div class="col-md-5 col-md-offset-1 bg-info" style="height:inherit;background:#006699;"  >


        <div style="background:#004699">
            <h4 class="text-center">Upload</h4>
        </div>
        <div class="row" >
          Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante
           sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis.
        </div>
  </div>

  <div class="col-md-5 col-md-offset-1 bg-info " style="height:inherit;background:#666699"  >
        <div style="background:#5C6699">
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

@section('content')
<div class="container">
  <div class="row">

  </div>
</div>
@endsection
