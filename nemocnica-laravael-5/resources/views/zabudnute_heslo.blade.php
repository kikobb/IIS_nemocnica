<!doctype html>
<html lang="en">
<head>
    <title>Zabudnute_heslo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="/css/index.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">

    <div class="bg">
        <div class="page-header">
            <img src="/pictures/logo.png">
            <h1>Nemocnica</h1>
        </div>

        <div class="container-fluid">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login1"><span class="glyphicon glyphicon-log-in"></span> Prihlásiť</a></li>
            </ul>
        </div>
    </div>


    <div class="col-sm-6 ">
        <h2>Zmena hesla </h2>
        <form class="form-horizontal" method="POST" action="http://127.0.0.1:8080/password/email">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Emailová adresa:</label>
                <input type="email" class="form-control" id="email" placeholder=" Email" name="email"  value="" required="required">

            </div>

            <div class="form-group">
                <div class="col-md-8">
                    <button type="submit" class="btn btn-info btn-lg">
                        Odoslať link o zmene hesla
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>



@include ('layouts.footer')

</body>



</html>