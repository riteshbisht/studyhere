<!DOCTYPE html>
<html lang="en">


<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>title</title>

  <!-- CSS  -->
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/icons.css">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  <style>
    .dropdownli:hover {
      background: #dfded2;
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
          <li><a href="/dashboard">Dashboard</a></li>
          <li><a href="#">Settings</a></li>

          <li>
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


  <div class="container-fluid " style="margin-top:50px;" id="maincontainer">
    <div class="row" style="height:800px;">
      <div class="col-md-2" style="background:#dfded2;height:inherit;border-right:2px solid #dfded2;">
        <div class="row">

          <ul class="nav nav-sidebar sidebarul">
            <li>
              <a href="/notes">
                <span>
                  <img class="icons" src="images/notesicon.png">
                </span>
                <span class="sidebartext">Notes</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span>
                  <img class="icons" src="images/videosicon.jpg">
                </span>
                <span class="sidebartext">Videos</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span>
                  <img class="icons" src="images/communityicon.jpg">
                </span>
                <span class="sidebartext">Community</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span>
                  <img class="icons" src="images/circleicon.png">
                </span>
                <span class="sidebartext">Circle</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span>
                  <img class="icons" src="images/starredicon.jpg">
                </span>
                <span class="sidebartext">Starred</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span>
                  <img class="icons" src="images/samplepapericon.png">
                </span>
                <span class="sidebartext">Sample paper</span>
              </a>
            </li>
            <li>
              <a href="#">
                <span>
                  <img class="icons" src="images/syllabusicon.jpg">
                </span>
                <span class="sidebartext">Syllabus</span>
              </a>
            </li>

          </ul>

        </div>
      </div>
      <div class="col-md-10" style="margin-top:50px;">
        <div class="row "  style="position:fixed;top:50px;width:85%;;z-index:9999;background:#21abc2;padding:10px;">
          <div class="col-md-4">
            <div class="dropdown">
              <button id="dLabel" type="button" id="university_button" class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span id="university_button_text">UNIVERSITY</span>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu text-center" aria-labelledby="dLabel" id="university_dropdown">

              </ul>
            </div>
          </div>


          <div class="col-md-4">
            <div class="dropdown">
              <button id="dLabel" type="button" id="courses_button" class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span id="courses_button_text">COURSES</span>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dLabel" id="courses_dropdown">

              </ul>
            </div>
          </div>

          <div class="col-md-4">
            <div class="dropdown">
              <button id="dLabel" id="subject_dropdown" class="btn btn-primary" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span id="subject_button_text">  Subject</span>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dLabel" id="subject_dropdown">

              </ul>
            </div>
          </div>
        </div>
      <div class="row" id="maincontainerrow" style="padding:30px;">
        <div class="row" >
          <div class="col-md-4">
            <img src="images/maths/source1.jpg" style="width:inherit;height:inherit;">
          </div>
          <div class="col-md-8">
            <h2>Topic</h2>
            <h4>SubTopic</h4>
          </div>

        </div>

        <div class="row">
          <div class="col-md-4">
            <img src="images/maths/source1.jpg" style="width:inherit;height:inherit;">
          </div>
          <div class="col-md-8">
            <h2>Topic</h2>
            <h4>SubTopic</h4>
          </div>

        </div>


        <div class="row">
          <div class="col-md-4">
            <img src="images/maths/source1.jpg" style="width:inherit;height:inherit;">
          </div>
          <div class="col-md-8">
            <h2>Topic</h2>
            <h4>SubTopic</h4>
          </div>

        </div>




        <div class="row">
          <div class="col-md-4">
            <img src="images/maths/source1.jpg" style="width:inherit;height:inherit;">
          </div>
          <div class="col-md-8">
            <h2>Topic</h2>
            <h4>SubTopic</h4>
          </div>

        </div>

<div>



      </div>

    </div>

  </div>

  <script>
    $('document').ready(function() {
      $('.dropdown-toggle').dropdown();
      load_university_data();
      $("#university_dropdown").on('click', '.university_list', function() {
          $("#subject_dropdown").empty();
            $("#courses_dropdown").empty();
        code = $(this).text();
        $("#university_button_text").text(code);
        university_value = $("university_button_text").text();
        load_course_data(code);
      });

      $("#courses_dropdown").on('click', '.courses_list', function() {
        course_name = $(this).text();
        course_code=$(this).next('input').val();
        $("#courses_button_text").text(course_name);
        courses_value = $("courses_button_text").text();
        console.log(course_code);
         load_subject_data(course_code);
      });

      $("#subject_dropdown").on('click', '.subject_list', function() {
        subject_name = $(this).text();
        $("#subject_button_text").text(subject_name);
        subject_code=$(this).next('input').val();
          load_topics(subject_code);
      });


    });


function load_topics(subject_code)
{
  if (subject_code == 'SUBJECT') {
    console.log("this");
  } else {
    $.ajax({
      url: '/api/v1/topic/'+subject_code,
      success: function(data) {
        objarr = data.topic;
        console.log(objarr);
        handle_topic(objarr);
      }
    });
}

}

function handle_topic(objarr)
{
  $("#maincontainerrow").empty();
  for (i = 0; i < objarr.length; i++) {
    var topic_name = objarr[i].name;
    var subject_code=objarr[i].subject_code;
    var unit=objarr[i].unit;
    console.log(subject_name)
    $("#maincontainerrow").append('<div class="row">' + topic_name + '</div>');
  }
}
    function load_subject_data(course_code) {

      if (course_code == 'COURSES') {
        console.log("this");
      } else {
        $.ajax({
          url: '/api/v1/subject/'+course_code,
          success: function(data) {
            objarr = data.sub_topic;
            console.log(objarr);
         handle_subject_data(objarr);
          }
        });
}

    }

    function handle_subject_data()
    {

      for (i = 0; i < objarr.length; i++) {
        var subject_name = objarr[i].name;
        console.log(subject_name)
        $("#subject_dropdown").append('<li class="subject_list dropdownli">' + subject_name + '</li><input type="hidden" value='+ objarr[i].subject_code+'></input>');
      }
    }


    function load_course_data(university) {

      if (university == 'UNIVERSITY') {
        console.log("this");
      } else {
        $.ajax({
          url: '/api/v1/courses/' + university,
          success: function(data) {
            objarr = data.topic;
            handle_course_data(objarr);
          }
        });

      }
    }

    function handle_course_data(objarr) {

      for (i = 0; i < objarr.length; i++) {
        var courses_name = objarr[i].name;
        console.log(courses_name)
        $("#courses_dropdown").append('<li class="courses_list dropdownli">' + courses_name + '</li><input type="hidden" value='+objarr[i].course_code+'></input>');
      }
    }

    function load_university_data() {
      var objarr;
      $.ajax({
        url: '/api/v1/university',
        success: function(data) {
          objarr = data.topic;
          handle_university_data(objarr);
        }
      });
    }

    function handle_university_data(objarr) {

      for (i = 0; i < objarr.length; i++) {
        var university_object = objarr[i].university_code;
        console.log(university_object)
        $("#university_dropdown").append('<li class="university_list dropdownli">' + university_object + '</li>');
      }
    }
  </script>
</body>

</html>
