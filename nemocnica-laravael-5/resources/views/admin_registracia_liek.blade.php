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
        <h2>Registrácia - lieku</h2>

        <form method="POST" action="{{ route('liekReg') }}" >
            {{ csrf_field() }}

            <div class="form-group">
                <label for="nazov">Názov lieku<span style="color:red;">*</span>:</label>
                <input type="text" class="form-control" id="nazov" placeholder="Názov" name="nazov" required>
            </div>

            <div class="form-group">
                <label for="ucinna_latka">Účinná látka:<span style="color:red;">*</span></label>
                <input type="text" class="form-control" id="ucinna_latka" placeholder="Účinná látka" name="ucinna_latka" required>
            </div>

            <div class="form-group">
                <label for="konraindikacia">Kontraindikácia:</label>
                <input type="text" class="form-control" id="konraindikacia" placeholder="Vedľajsšie účinky" name="konraindikacia">
            </div>


            <button type="submit" class="btn btn-info btn-lg"><span type="submit" class="glyphicon glyphicon-user"></span>Registrovať</button>

            <div class="form-group">
                <span style="color:red;">*</span> - sú označené povinné údaje
            </div>

        </form>
    </div>



</div>

@include('layouts.footer')

</body>


</html>