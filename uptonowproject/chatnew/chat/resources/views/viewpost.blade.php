<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        #post {
            background-image: url("/images/job.jpg");
            background-size: cover;
            color: white;
        }
    </style>

</head>

<body id="post">

    <br><br>

    <div class="container">
        <div class="text-center">
            <h1>
                <p class="text-info">Your Posts </p>
            </h1>

            <br><br>

            @foreach($details as $view_datas)

            <table class="table table-dark">
                    
                <tr>
                    <th>
                        Description
                    </th>

                    <td>
                        {{$view_datas->description}}
                    </td>
                </tr>

                <tr>
                    <th>
                        Image
                    </th>
    
                    <td>
                        <img src="/storage/{{$view_datas->image}}" alt="Image" style="width:250px; height:200px;">
                    </td>

                </tr>

            </table>

            @endforeach

        </div>

    </div>

</body>

</html>