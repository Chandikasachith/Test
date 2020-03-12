<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        #post {
            background-image: url("/images/job2.jpg");
            background-size: cover;
            color: black;

        }
    </style>
</head>

<body id="post">


    <br><br>

    <div class="container">
        <div class="text-center">
            <h1>
                <p class="text-info">All Job Vacancies </p>
            </h1>

            <br><br>

            <table class="table table-dark">

                <th>
                    Description
                </th>

                <th>
                    Images
                </th>

                @foreach($de as $v)
                <tr>
                    <td>{{$v->description}}</td>

                    <td> <img src="/storage/{{$v->image}}" alt="Image" style="width:250px; height:200px;"></td>

                </tr>
                @endforeach
            </table>

        </div>

    </div>

</body>

</html>