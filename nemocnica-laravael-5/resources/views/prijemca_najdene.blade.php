<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <html lang="en">
        <head>
            <title>Nájdené</title>
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
                    <a href="#"><button class="dropbtn">Upraviť profil</button></a>
                </div>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>


        </div>


    </div>


@include('layouts.vyhladavanie')

    <div class="col-sm-10 ">
        <div class="table">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Krsne meno</th>
                    <th>Priezvisko</th>
                    <th>Oddelenie</th>
                </tr>
                </thead>
                <tbody>
                {{--@foreach ($osoby as $osoba)--}}
                    {{--<tr>--}}
                        {{--<td>1</td>--}}
                        {{--<td>$osoba->meno</td>--}}
                        {{--<td>$osoba->priezvisko</td>--}}
                        {{--<td>$osoba->oddelenie</td>--}}
                    {{--</tr>--}}
                {{--@endforeach--}}
                </tbody>
            </table>
        </div>
    </div>



</div>
@include('layouts.footer')
</body>

</html>