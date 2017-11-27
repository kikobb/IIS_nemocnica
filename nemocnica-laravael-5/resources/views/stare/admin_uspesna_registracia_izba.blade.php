<!doctype html>
<html lang="en">
<head>
    <title>Registracia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="/css/index.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">

    @include('layouts.header_admin')


    <div class="col-sm-6 ">
        <h2>Úspešná registrácia</h2>

        <a href="izbaReg" class="btn btn-info btn-lg">
            <span type="submit" class="glyphicon glyphicon-repeat"></span> Ďalšia registrácia
        </a>


        <a href="home_admin" class="btn btn-info btn-lg">
            <span type="submit" class="glyphicon glyphicon-home"></span> Domov
        </a>

    </div>


</div>

@include('layouts.footer')

</body>


</html>