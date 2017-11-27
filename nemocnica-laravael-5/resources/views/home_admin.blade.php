<!doctype html>
<html lang="en">
<head>
    <title>Home</title>
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
        <h2>Moje údaje</h2>

        <div>
            <div class="col-md-5">Meno</div>
            <div class="col-md-6">$admin->meno </div>
        </div>

        <div>
            <div class="col-md-5">Priezvisko</div>
            <div class="col-md-6">$admin->priezvisko </div>
        </div>


        </form>
    </div>



</div>

@include('layouts.footer')

</body>


</html>