<!DOCTYPE html>
<html>
<head>
<title>Rotaract Club of Badulla</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style type ="text/css">
    .box{
            width:600px;
            margin:0 auto;
            border:1px solid #ccc;

    }
    .has-error
    {
        border-color:#cc0000;
        background-color:#ffff99;

    }
    body {
  background-image: url("/images/project.jpg");}
  .table{
      margin-top:-55px;
  }
}
    </style>
</head>
<body>
<div class="row">
<div class="col-md-12">
<br/>
<div class="container">
    
 <div>   
<h2 align="center" style="color:white;padding-top:35px;">View Team</h2>

    @if($message =  Session::get('success'))
    <div class = "alert alert-danger alert-block" style="margin-top:30px;width:950px;height:50px;">
    <button type="button" class="close" data-dismiss="alert">X</button>
    
    <strong>{{ $message }}</strong>
    </div>

    @endif

<div align="right" ><a href="{{action('PostsController@uploadteam')}}" class="btn btn-primary" style="padding-top:5px;padding-left:20px;padding-right:20px;">Upload Team</a></div>
</div>
<br/>
<br/>
<font family="Georgia" size="3px" color="white">
<table class="table table-bordered" style="background-color:black;color:white;margin-top:-2px">
    <tr style="text-align:center">
    <th>Name</th>
    <th>Designation</th>
    <th>Email</th>
    <th>Image</th>
    <th>Delete</th>
    </tr>
    @foreach($data as $row)
    <tr>
        <td style="text-align:justify;">{{$row['name']}}</td>
        <td style="text-align:justify;">{{$row['position']}}</td>
        <td style="text-align:justify;">{{$row['email']}}</td>
        <td><img src="/storage/{{$row['image']}}" alt="Image" style=" height:100px;width:100px;"></td>
       
        <td>
        <form action="/teamdelete/{{$row['id']}}" method="post">
        {{csrf_field()}}
        @method('DELETE')
        <button type="submit" class="btn btn-danger"onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
   </form>
        </td>
    </tr>
    @endforeach
    </table>
    </font>
    </div>
    </div>
<body>
</html>