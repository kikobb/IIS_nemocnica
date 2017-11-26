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
        <h2>Registrácia - izby</h2>

        <form method="POST" action="{{ route('register') }}" >
            {{ csrf_field() }}


            <div class="form-group">
                <label for="typ">Typ</label>
                <select class="form-control" id="typ" name="typ" required>
                    <option>Ženy</option>
                    <option>Muži</option>
                    <option>Deti-chlapci</option>
                    <option>Deti-dievčatá</option>
                </select>
            </div>

            <div class="form-group">
                <label for="kapacita">Kapacita:</label>
                <input type="cislo" class="form-control" id="kapacita" placeholder="1" name="kapacita" required>
            </div>

            <div class="form-group">
                <label for="cislo">Číslo:</label>
                <input type="cislo" class="form-control" id="cislo" placeholder="1" name="cislo">
            </div>


            {{--nejako aby mi kiko poslal vsetky nazvy oddeleni--}}
            <div class="form-group">
                <label for="cislo">Oddelenie:</label>
                <select class="form-control" id="oddelenie" name="oddelenie" required>
                    <option>Ženy</option>
                    <option>Muži</option>
                    <option>Deti-chlapci</option>
                    <option>Deti-dievčatá</option>
                </select>
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