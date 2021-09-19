<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="jumbotron text-center">
  <h1>My First Page</h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-sm-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div>
</div>
<div class="container">
  <h2>Comment</h2>
  @foreach($cmd as $item)
  <div>
    <div class="" style="border-bottom:1px solid black;margin-top:10px">
     <div class="top-comment">
     <h4>Aditi Alam</h4>
     <span>{{$item->created_at->format('D,d M Y H:i')}}</span>
     <p>{{$item->comment}}</p>
     </div>
      @if($item->replies->count()>0)
      @foreach($item->replies as $reply)

     <div class="left-comment" style="margin-left:50px;border-bottom:1px solid black ">
     <h4>Aditi Alam</h4>
     <p>{{$reply->message}}</p>
     </div>
     @endforeach
     @endif

   
     <button class="btn btn-danger" onclick="Say_Hello('{{$item->id}}','{{$item->user_id}}')" >Reply</button>
     <div class="cmt{{$item->id}}" style="display:flex;display:none">
     <form method="post" action="comment-reply/{{$item->id}}">
     @csrf
     <input class="form-control" style="width:200px" name="rcomment">
     <input value="{{$item->id}}" hidden name="cid">
     <button type="submit"><i class="fa fa-paper-plane"></i></button>
</form>
</div>
</div> 

  </div>
@endforeach
</div>
<form method="post" action="comment/5">
@csrf
    <div class="container">
        <div class="form-group">
    <input class="form-control" name="comment" type="text" placeholder="comment">
</div>
    <button class="btn btn-primary" >Submit</button>
     </div>
</form>
<script>

function Say_Hello(cid,uid) {
  $('.cmt'+cid).show();
}

</script>
</body>
</html>
