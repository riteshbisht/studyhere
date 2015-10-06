var current;
$('document').ready(function(){
  $('.sourceimage').click(function(){
    var url=$(this).attr('src');
  //  next=$(this).next('span').attr('src');
    current=$(this);
    $(".modal-body").empty();
    $(".modal-body").append('<img id="currentimage" style="width:700px;height:800px;"src="'+url+'"/>')

$('#myModal').modal('show') ;
  });
$("#next").click(function(){
  $(".modal-body").empty();
  if(current.parent().next('span').children('img').attr('src')==null)
  {
    $('#myModal').modal('hide');
  }
  //console.log(current.parent().next('span').children('img').attr('src'))
  else {


  $(".modal-body").append('<img id="currentimage" style="width:700px;height:800px;"src="'+current.parent().next('span').children('img').attr('src')+'"/>')
    current=current.parent().next('span').children('img');
   //console.log(current.attr('css'));
  $('#myModal').modal('show');
}
});
$("#previous").click(function(){
  $(".modal-body").empty();
  if(current.parent().prev('span').children('img').attr('src')==null)
  {
    $('#myModal').modal('hide');
  }
  //console.log(current.parent().next('span').children('img').attr('src'))
  else {

  $(".modal-body").append('<img id="currentimage" style="width:700px;height:800px;"src="'+current.parent().prev('span').children('img').attr('src')+'"/>')
    current=current.parent().prev('span').children('img');
   //console.log(current.attr('css'));
  $('#myModal').modal('show');
}
});

});
