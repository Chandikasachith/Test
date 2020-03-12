<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        #post {
            background-image: url("/images/job.jpg");
            background-size: cover;
            color: white;
        }

        .button {
            background-color: #4CAF50;
            /* Green */
            h border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s;
            /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }

        .button2 {
            background-color: #448AFF;
            color: white;
            border: 2px solid #008CBA;
        }

        .button2:hover {
            background-color: #fff;
            color: black;
        }
    </style>

</head>

<body id="post">

    <br><br>

    <div class="container" style="background-color:red">
        <div class="text-center">

            <h1>
                <p class="text-info">Posts Jobs </p>
            </h1>

            <br><br>

            <div class="row" >
                <div class="col-md-12">

                    @foreach($errors->all() as $error)

                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div>

                    @endforeach

                    <form class="form-horizontal" method="post" action="{{url('/p2')}}" enctype="multipart/form-data" >

                        {{ csrf_field() }}

                        {{-- <div class="form-group">

                            <p class="text-secondary"><label class="control-label col-sm-2">Title : </label></p>

                            <div class="col-sm-10">

                                <input type="text" class="form-control" name="title" placeholder="Enter the project title here...">

                            </div>

                        </div> --}}

                        <div class="form-group">

                            <p class="text-secondary"><label class="control-label col-sm-2">Description : </label></p>

                            <div class="col-sm-10">

                                <textarea class="form-control" name="description" rows="7" placeholder="Enter the job vacancy description here..."></textarea>

                            </div>

                        </div>

                        <div class="form-group">

                            <p class="text-secondary"><label class="control-label col-sm-2">Image : </label></p>

                            <div class="col-sm-10">

                                <input type="file" multiple name="image" />
                                <br>
                                <p class="text-left"><small class="text-muted"> jpg , png , gif </small></p>

                            </div>

                        </div>

                        <br><br>

                        <input type="submit" class="button button2" value=" Save" style="float: right;">

                    </form>

                </div>
            </div>

        </div>
    </div>

</body>

</html>