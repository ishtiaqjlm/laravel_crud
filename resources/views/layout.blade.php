<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 CRUD Application - ItSolutionStuff.com</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
</head>
<body>
  
<div class="container">
  
   <form action="{{route('form')}}" name="store_data" id="store_data" method="post">
    @csrf
    <input type="text" name="name" id="name" value=""><br/>
    <input type="text" name="short_descrption" id="short_descrption" value=""><br/>
    <textarea  name="long_descrption" id="long_descrption" cols="10" rows="10"></textarea><br/>
    <input type="submit" name="Submit" value="Submit">
   </form>
</div>
   
</body>
</html>