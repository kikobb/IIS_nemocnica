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

    <div class="bg">
        <div class="page-header">
            <img src="/pictures/logo.png">
            <h1>Nemocnica</h1>
        </div>

        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <div class="dropdown">
                    <button class="dropbtn">Hľadať</button>
                </div>
            </ul>

            <div class="dropdown">
                <button class="dropbtn">Zobraziť</button>
                <div class="dropdown-content">
                    <a href="#">Vyšetrenia</a>
                    <a href="#">Pobyty</a>
                    <a href="#">Lieky</a>
                </div>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>


    </div>


    <div class="col-sm-6 ">
        <h2>Moje údaje</h2>

        <div>
            <div class="col-md-5">Meno</div>
            <div class="col-md-6">$pacient->meno </div>
        </div>

        <div>
            <div class="col-md-5">Priezvisko</div>
            <div class="col-md-6">$pacient->priezvisko </div>
        </div>

        <div>
            <div class="col-md-5">Rodné čislo</div>
            <div class="col-md-6">$pacient->rodne_cislo </div>
        </div>

        <div>
            <div class="col-md-5">Číslo poisťovne</div>
            <div class="col-md-6">$pacient->cislo_poistovne </div>
        </div>


        </form>
    </div>



</div>

@include('layouts.footer')

</body>


</html>