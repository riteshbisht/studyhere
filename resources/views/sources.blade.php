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
    <link href="{{url('css/shop-homepage.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background:url('{{url('images/1.jpg')}}')">
  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">


        <div class="modal-body">

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" id="next">Next</button>
          <button type="button" class="btn btn-default" id="previous">Previous</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

      </div>
      </div>

    </div>
  </div>

<!-- modal ends -->
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
<div class="container">
  <h1 class="text-center" style="color:white;">{{$subtopic_name}}</h1>

  @foreach($allcontent as $content)
    <div class="row" style="background:white;margin:20px;">
        <h3>Source {{$content->id}}<h3>
          @for($i=0;$i<$content->noofimages;$i++)
              <span><img class="sourceimage" style="cursor:pointer;width:100px;height:150px;margin:30px;border:solid 5px black;" src="{{url($content->source.'image-'.$i.'.jpg')}}"></span>
            @endfor
        <h5>pluscount: {{$content->pluscount}}</h3>
        <h5>views: {{$content->views}}</h3>
    </div>
  @endforeach

</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script>
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
</script>
</body>


</html>
