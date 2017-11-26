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
        <h2>Registrácia - oddelenia</h2>

        <form method="POST" action="{{ route('oddelenieReg') }}" >
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nazov">Názov oddelenia:</label>
                <input type="text" class="form-control" id="nazov" placeholder="Oddelenie" name="nazov" required>
            </div>

            <div class="form-group">
                <label for="poschodie">Poschodie:</label>
                <input type="number" class="form-control" id="poschodie" placeholder="1" name="poschodie">
            </div>


            <a href="#" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-user"></span> Registrovať
            </a>
        </form>
    </div>



</div>

@include('layouts.footer')

</body>


</html>