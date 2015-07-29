var express = require('express'),
    http = require('http');
var app = express();
var server = http.createServer(app);
var io = require('socket.io').listen(server);
var mysql      = require('mysql');

var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : 'secret',
  database : 'homestead'
});


connection.connect(function(err){
if(!err) {
    console.log("Database is connected ... \n\n");
} else {
    console.log("Error connecting database ... \n\n");
}
});

server.listen(3000);

io.on('connection', function (socket) {

  console.log("new client connected");


  socket.on('chat_message', function(msg){
      console.log('message: ' + msg);

         socket.broadcast.emit('chat_message', msg);

    });

socket.on('new_room',function(room_name)
{

});

  socket.on('disconnect', function() {
  console.log('user disconnected');
  });

});
