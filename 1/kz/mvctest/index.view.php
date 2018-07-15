<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test MVC</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
          integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

<div class="container py-5">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="table-responsive">
                <table class="table text-center">
                    <thead class="bg-info">
                    <tr class="">
                        <th class="text-center">ID</th>
                        <th class="text-center">Movie Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=1; foreach ($movie_names as $movie_name):?>
                    <tr>
                        <td><?=$i++;?></td>
                        <td class="">
                            <?=$movie_name;?>
                        </td>
                    </tr>
                    <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 mx-auto">
            <form action="" method="post">
                <div class="form-group">
                    <label for="movie_name">Enter Movie Name</label>
                    <input type="text" class="form-control" name="movie_name" id="movie_name" placeholder="">
                </div>
                <button type="submit" class="btn btn-primary" name="btn_add_movie">Add Movie</button>
            </form>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
</body>
</html>
