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

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Start Bootstrap</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

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
                    <p>Copyright &copy; Your Website 2014</p>
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
