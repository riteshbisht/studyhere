<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="" name="description"/
  <meta content="" name="author"/>
  <title>Tutelage</title>

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
<body style="background-image:url(images/1.jpg);">

 <nav class="navbar-fixed  sidebar-menu-collapsed grey darken-4">
<div class="nav-wrapper container-fluid"><a id="logo-container"  class="brand-logo center"> forums</a>

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
<div class = "container-fluid">
  <div class="row" style="margin-top:30px;margin-left:30px;">
    <div class="col-md-2 col-sm-2 col-lg-2"></div>
    <div class="col-md-8 col-sm-8 col-lg-8">
      <label for="comment">Comment:</label>
      <textarea class="form-control" rows="4" id="comment"></textarea>
    </div>
    <div class="col-md-2 col-sm-2 col-lg-2">
      <div class = "row" style="margin-top:30px;">  
        <button type="button" id="sendie" class="btn btn-primary" style="background:orange; height :50px; width:100px">Send</button>
        <input type="hidden" id="forum_id" value="ETMA-101-1-1"/>
      </div>
    
    </div>
</div>
</div>      
















<!--  Scripts-->
  <!-- Menu Toggle Script -->
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

   <script>
var instanse=false;
var state=0;
var allow=false;
function call_update()
{

  $forum_id=$('#forum_id').val();
  updateChat($forum_id);
instanse=false;
    setTimeout(call_update,5000);

}
$('document').ready(function(){



  function Chat () {
      this.update = updateChat;
      this.send = sendChat;
      this.getStateAndLoad = getStateAndLoadChat;
  }

  var chat =  new Chat();

chat.getStateAndLoad();
$('#sendie').click(function(e) {

           var message=$('#comment').val();
           $('#comment').val('');
           $(this).attr("disabled", true);
if(message=='')
{

}
else {
// send

chat.send(message);
}
});

});



//load the inital chat


//gets the state of the chat
function getStateAndLoadChat() {

  if(!instanse){

    instanse = true;
    var forum_id=$('#forum_id').val();

    $.ajax({
      type: "POST",
      url: "/forum",
      data: {'function': 'getStateAndLoad', 'forum_id':forum_id},
      dataType: "json",
      success: function(data) {
instanse = false;

allow=true;

        var messagearr=data.messages;
        //load the chat
      loaddata(messagearr);
        state = data.state;

call_update();

        }
    });
  }
  instanse = false;
}
function loaddata(messagearr)
{

  if(allow)
  {
  for(i=0;i<messagearr.length;i++)
  {
    $("#msgbox").append('<div class="row messagestyle" >'+messagearr[i].message+'</div><div class="row datetimestyle">'+messagearr[i].created_at+'</div><hr>')
 $("#sendie").attr("disabled", false);
  }
}
}
//Updates the chat
function updateChat(forum_id) {

  if(!instanse){
    instanse = true;

    $.ajax({
      type: "POST",
      url: "/forum",
      data: {'function': 'update','state': state,'forum_id':forum_id},
      dataType: "json",
      success: function(data) {

        if(data.text==false)
        {

        }
        else if(data.msg.length==0)
        {

        }
        else {
        var messagearr=data.msg;
        loaddata(messagearr);
          state = data.state;
  instanse = false;
      }
    }
    });
  }
  else {
    setTimeout(updateChat, 1500);

  }
}

//send the message
function sendChat(message) {
  var forum_id=$('#forum_id').val();

  $.ajax({
    type: "POST",
    url: "/forum",
    data: {'function': 'send','forum_id': forum_id,'message':message},
    dataType: "json",
    success: function(data){

      updateChat(forum_id);
    }
  });
}




</script> 






  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/login.js"></script>
  </body>
</html>
