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
