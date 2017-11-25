<!doctype html>
<html lang="en">
<head>
    <title>Index</title>
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
    </div>


    <div class="col-sm-6 ">
        <h2>Prihlásenie </h2>
        <form action="/action_page.php" >
            <div class="form-group">
                <label for="email">Email:</label><input type="email" class="form-control" id="email" placeholder="Vložte email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Heslo:</label>
                <input type="password" class="form-control" id="pwd" placeholder=" Vložte heslo" name="pwd">
            </div>
            <a class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-log-in"></span> Prihlásiť
            </a>
        </form>
    </div>
</div>



@include ('layouts.footer')

</body>



</html>