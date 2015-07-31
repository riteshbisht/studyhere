<html>
<head>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection" />
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="https://cdn.socket.io/socket.io-1.3.4.js"></script>

</head>
<style>
#rcvmsg{
  font-size:30px;
  background:white;
  width:40%;
  margin-top:5px;
  border-top-right-radius:5px;
  border-bottom-right-radius:5px;
  padding-left:20px;
  word-spacing:2px;

}
#sntmsg{
font-size:30px;
background:white;
width:40%;
margin-top:5px;
border-top-left-radius:5px;
border-bottom-left-radius:5px;
text-align:right;
padding-right:20px;
word-spacing:2px;
position:relative;
left:30%;
}
</style>
<body >
  <!-- modal starts here-->
  <div id="modal1" class="modal" >
   <div class="modal-content center-align" >
     <h4  id="modal_header"></h4>
     <div class="row">
        <div class="input-field col s12">
          <input placeholder="Room_name" id="first_name" type="text" class="validate">
        </div>
      </div>
   </div>
   <div class="modal-footer">
     <a href="#!" id="submit_btn" class=" btn waves-effect waves-green btn-flat">Submit</a>
   </div>
 </div>
 <!-- modal ends here-->


 <!--navbar starts here-->
  <nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo">BLah..BLah!!!</a>

      <ul class="right hide-on-med-and-down">

        <li><a href="#" id="new_room">New Room</a></li>
        <li><a href="#" id="leave_current_room">Leave Room</a></li>
        <li>
          <input id="search" type="text" placeholder="search"  >
        </li>
      </ul>
      <ul class="right hide-on-med-and-down side-nav light-blue lighten-1 fixed " style="margin-top:60px;box-shadow:none;position:fixed;overflow-y:scroll;">
          <li><a href="#">Bot</a></li>
      </ul>
      <ul id="nav-mobile" class="side-nav" >
        <li><a href="#">Navbar Link</a></li>
      </ul>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>

<!--nav bar ends here-->


<div class="container-fluid"  >
  <div class="row  ">
    <div class="col s6 m6 l6 offset-s3 offset-m3 offset-l3 purple lighten-2" style="height:400px; overflow-y:scroll;" id="msgbox">

    </div>
    <div class="col s3 m3 l3">
      <ul class="left hide-on-med-and-down">

        <li><a href="#" id="new_room">member1m</a></li>

      </ul>
  </div>
  </div>
    <div class="row">
        <div class="col s6 m6 l6 offset-s3 offset-m3 offset-l3">
            <div class="panel panel-default">
                <div class="card-panel center-align">

                    <button  class="btn" id="snd_msg_btn">SEND</button>
                    <input type="text" name="message" id="snd_msg_box" >


                </div>
            </div>
        </div>
    </div>

</div>
</div>
<script src="https://cdn.socket.io/socket.io-1.3.5.js"></script>
<script>


    var socket = io.connect('http://192.168.100.1:4000/');

    socket.on('chat_message', function(msg){
  $( "#msgbox" ).append( "<div id='rcvmsg' class='row'>"+msg+"</div>" );
 });

      $('#snd_msg_btn').click(function(){
        if($('#snd_msg_box').val()=='')
        {

        }
        else {
          socket.emit('chat_message', $('#snd_msg_box').val());
                $( "#msgbox" ).append( "<div id='sntmsg' class='row'>"+$('#snd_msg_box').val()+"</div>" );
          $('#snd_msg_box').val('');

          return false;
        }

});
</script>
<script>
$("#new_room").bind('click',function(){
$("#modal_header").html('New Room');
  $('#modal1').openModal();
});
$("#submit_btn").bind('click',function(){
modal_heading=$("#modal_header").val();
if(modal_heading='Leave Room')
{
  console.log("ritesh");
}
else {
  console.log("himanshu");

}
});
$("#leave_current_room").bind('click',function(){
$("#modal_header").html('Leave Room');
  $('#modal1').openModal();


});
</script>
</body>
</html>
