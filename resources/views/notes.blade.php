<!DOCTYPE html>
<html lang="en">

<head>


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

   
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="" name="description"/
  <meta content="" name="author"/>
  <title>Notes</title>

  <!-- CSS  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css//signin/sb-admin-2.css">
  <link rel="stylesheet" href="css/signin/dash.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/signin/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/signin/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <link href="css/signin/login.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <!-- BEGIN GLOBAL MANDATORY STYLES -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="js/signin/materialize.js"></script>
  <script src="js/signin/materialize.min.js"></script>
  <script src="js/signin/dash_js.js"></script>
<!-- END GLOBAL MANDATORY STYLES -->  
 <link rel="shortcut icon" href="favicon.ico"/>

</head>

<body style="background:url('images/1.jpg')">

<nav class="navbar-fixed  sidebar-menu-collapsed grey darken-4">
<div class="nav-wrapper container-fluid"><a id="logo-container"  class="brand-logo center"> Notes</a>

<div class="row">
<div class="col-md-1 col-xs-2">
 <a href='#menu-toggle' id='justify-icon'>
    <span class='glyphicon glyphicon-align-justify btn' id="side-button"></span>
  </a>
</div>

</div>

   </div><!--row closed of the navbar-->

  </div> <!--container-fluid closed-->
</nav>


<!-- side bar fixed-->

<div class="container-fluid grey darken-4" id="side-bar">

  <div class="row" style="height:700px;">
      <ul>
        <li class="profile-userpic">

          <img src="" class="img-responsive" alt="hi">


        </li>

      </ul>

          <div class="profile-usertitle-name" style="color:white;">
        {{ Auth::user()->name }}
          </div>
      <div class="profile-usermenu">
          <ul class="nav">
            <li>
              <a href="{{url('/dashboard')}}">
              <i class="glyphicon glyphicon-home"></i>
              Dashboard</a>
            </li>
            <li>
              <a href="{{url('/profile_settings')}}">
              <i class="glyphicon glyphicon-user"></i>
              Profile Settings </a>
            </li>
            <li>
              <a href="{{url('/report')}}">
              <i class="glyphicon glyphicon-warning-sign"></i>
              Report </a>
            </li>
            <li>
              <a href="{{url('auth/logout')}}">
              <i class="glyphicon glyphicon-plane"></i>
              Logout </a>
            </li>
          </ul>
        </div>
  </div>


</div>

<!-- side bar ends -->

    

    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead"></p>
                <div class="list-group">
                    <a href="#" class="list-group-item">
                      <form role="form">
      <div class="form-group">
        <label>Select University</label>
        <select class="form-control" id="university_dropdown">

        </select>
        <br>
        <label>Select Courses</label>
        <select class="form-control" id="courses_dropdown">

        </select>
        <br>
        <label >Select Subject</label>
        <select class="form-control" id="subject_dropdown">

        </select>
      </div>
    </form>
                    </a>
                                  </div>
            </div>

            <div class="col-md-9">

                <div class="row carousel-holder">


                </div>

                <div class="row" id="maincontainerrow">



                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Made By Tutelage</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<!--
script fo ajax call loading the data
-->
<script>
      $("#side-button").click(function(){
       $("#side-bar").animate({
         width: "toggle"
     });
      });
    </script>

    <script>
    $(document).ready(function(){
      $("#side-bar").hide();
    });
    </script>
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/login.js"></script>
<script>
  $('document').ready(function() {
    $('.dropdown-toggle').dropdown();
    load_university_data();
    load_random_topics();
    console.log("ritesh");
    $("#university_dropdown").change(function() {
      var code="";
code=$( "#university_dropdown option:selected" ).text();
    console.log(code);


      console.log("hello");
        $("#subject_dropdown").empty();
          $("#courses_dropdown").empty();
      //code = $(this).text();
      //console.log(code);

  //    $("#university_button_text").text(code);
    //  university_value = $(this).text();
      load_course_data(code);
    });

    $("#courses_dropdown").change(function() {
    course_name=$("#courses_dropdown option:selected").text();
      course_code=$("#courses_dropdown option:selected").val();
      console.log(course_code);
       load_subject_data(course_code);
    });

    $("#subject_dropdown").change( function() {
      subject_name = $("#subject_dropdown option:selected").text();
      subject_code=$("#subject_dropdown option:selected").val();
        load_topics(subject_code);
    });


  });

function load_random_topics()
{
  $.ajax({
    url: '/api/v1/randomtopic/',
    success: function(data) {
      objarr = data.topic;
      console.log(objarr);
      handle_topic(objarr);
    }
  });

}
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
  var topic_code=objarr[i].topic_code;
  var views=objarr[i].views;
  var unit=objarr[i].unit;
//  console.log(subject_name);
   load_subtopic(topic_code,topic_name,views,unit);
  }


}

//$(".subtopics>li").on(click)

function load_subtopic(topic_code,topic_name,views,unit)
{
  var str="";
  $.ajax({
    url: '/api/v1/subtopic/'+topic_code,
    success: function(data) {
      objarr = data.sub_topic;
      str=handle_subtopic(objarr);
      $("#maincontainerrow").append('<div class="col-sm-12 col-lg-12 col-md-12" style="height:auto;"><div class="thumbnail"><div class="caption "><h3><a href="#" >'+topic_name+'</a><span><UNIT - '+unit+'</span></h3><div>'+str+'</div><div class="ratings"><p class="pull-right">'+views+' views</p><p>  <span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span></p></div></div></div></div>');

    }
  });
}

function handle_subtopic(objarr)
{
  var str="<ol class='subtopics'>";
  for(i=0;i<objarr.length;i++)
  {
    str=str+'<a href="sources/'+objarr[i].name+'"><li style="margin:10px;cursor:pointer;" class="text-left">'+objarr[i].name+'</li><a>'
  }
  str=str+"</ol>"
console.log(str);
return str;
}
  function load_subject_data(course_code) {
    //console.log(course_code);
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
      $("#subject_dropdown").append('<option class="subject_list dropdownli" value='+objarr[i].subject_code+'>' + subject_name + '</option>');
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
      console.log(courses_name);
      $("#courses_dropdown").append('<option class="courses_list dropdownli" value='+objarr[i].course_code+'>'+courses_name + '</option>');
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
  //    console.log(university_object)
      $("#university_dropdown").append('<option class="university_list dropdownli">' + university_object + '</option>');
    }
  }
</script>

</body>

</html>
