<!doctype html>
<html lang="en">
<head>
    <title>Hľadanie</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="/css/index.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="/js/vyhladavanie.js"></script>
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
                    <a href="#"><button class="dropbtn">Hľadať</button></a>
                </div>

                <div class="dropdown">
                    <a href="#"><button class="dropbtn">Pridať pobyt</button></a>
                </div>

                <div class="dropdown">
                    <a href="#"><button class="dropbtn">Pridať pacienta</button></a>
                </div>

                <div class="dropdown">
                    <a href="#"><button class="dropbtn">Vytvoriť správu</button></a>
                </div>

                <div class="dropdown">
                    <a href="#"><button class="dropbtn">Upraviť profil</button></a>
                </div>
            </ul>


            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Odhlásiť</a></li>
            </ul>


        </div>
    </div>

@include('layouts.vyhladavanie')

</div>

@include('layouts.footer')

</body>


</html>