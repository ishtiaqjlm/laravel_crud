<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD Application - ItSolutionStuff.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
  
<div class="container">
   <table class="table table-stripped">
  <tr>
    <th>Product Name</th>
    <th>Short Description</th>
    <th>Long Description</th>
    <th>Action</th>
  </tr>
  @foreach($all_product as $product)
  <tr>
    <td>{{$product->name}}</td>
    <td>{{$product->short_descrption}}</td>
    <td>{{$product->long_descrption}}</td>
    <td><a href="">Edit</a> | <a href="{{url('/delete_product/'.$product->pid)}}">Delete</a></td>
  </tr>
  @endforeach
</table>
</div>
   
</body>
</html>