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

</head>

<body >
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
                <a href="\home" id="#username">{{ Auth::user()->name }}</a></li>
              </li>
                  <li class=" navbarli"><a href="{{ url('/auth/logout') }}">Logout</a></li>
            </ul>
            <form class="navbar-form navbar-right">
              <input type="text" class="form-control" placeholder="Search...">
            </form>
          </div>
        </div>
      </nav>



  <div class="container-fluid " style="margin-top:50px;" id="maincontainer" >
  <div class="row" style="height:800px;">
    <div class="col-md-2" style="background:#dfded2;height:inherit;border-right:2px solid #dfded2;">
      <div class="row">


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
  </div>


    <div class="col-md-10"  >
<div class="row" style="margin-top:30px;margin-left:30px;">
              <div class="row" id="msgbox">

            </div>

                <hr>
              <div class="row">
                <label for="comment">Comment:</label>
        <textarea class="form-control" rows="5" id="comment"></textarea>
        <button type="button" id="sendie" class="btn btn-primary">Snd</button>
        <input type="hidden" id="forum_id" value="ETMA-101-1-1"/>
            </div>
</div>
          </div>

</div>

</div>

<script>

$('window').load(function(){

  setInterval('chat.update('+$('#forum_id').val()+')', 5000);
})
var instanse=false;
var state=0;
function Chat () {
    this.update = updateChat;
    this.send = sendChat;
    this.getStateAndLoad = getStateAndLoadChat;
}


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
        var messagearr=data.messages;
        //load the chat
        for(i=0;i<messagearr.length;i++)
        {
          $("#msgbox").append('<div class="row">'+messagearr[i].message+'</div><div class="row">'+messagearr[i].created_at+'</div>')
        }
        state = data.state;



        }
		});
	}
  instanse = false;
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
        else {

        var messagearr=data.msg;
        $("#msgbox").append('<div class="row">'+messagearr[0].message+'</div><div class="row">'+messagearr[0].created_at+'</div>')

        }
          state = data.state;
  instanse = false;
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
	updateChat(forum_id);

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
var chat =  new Chat();

  $(function() {

chat.getStateAndLoad();

     // watch textarea for key presses
     $("#sendie").keydown(function(event) {

         var key = event.which;

         //all keys including return.
         if (key >= 33) {

             var maxLength = $(this).attr("maxlength");
             var length = this.value.length;

             // don't allow new content if length is maxed out
             if (length >= maxLength) {
                 event.preventDefault();
             }
         }
                                                                                                     });
     // watch textarea for release of key press
     $('#sendie').click(function(e) {

                var message=$('#comment').val();
                $('#comment').val('');
if(message=='')
{
console.log("empty");
}
else {
  // send

    chat.send(message);
}




     });
  });



</script>


</body>
</html>
