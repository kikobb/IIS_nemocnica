/**
 * Created by PhpStorm.
 * User: lucka
 * Date: 25.11.2017
 * Time: 13:05
 */
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><!DOCTYPE html>
        <html lang="en">
        <head>
            <title>Registracia</title>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <link rel="stylesheet" type="text/css" href="../../public/css/index.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="../../public/js/vyhladavanie.js"></script>
        </head>

<body>
<div class="container">

    <div class="bg">
        <div class="page-header">
            <img src="../../public/pictures/logo.png">
            <h1>Nemocnica</h1>
        </div>

        <div class="container-fluid">
            <ul class="nav navbar-nav">
                <div class="dropdown">
                    <button class="dropbtn">Hladat</button>
                </div>

                <div class="dropdown">
                    <button class="dropbtn">Pobyt</button>
                    <div class="dropdown-content">
                        <a href="#">Pridat</a>
                        <a href="#">Zmenit</a>
                        <a href="#">Vytvorit</a>
                    </div>
                </div>
            </ul>
            <div class="dropdown">
                <button class="dropbtn">Upravit</button>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>


        </div>


    </div>


    <div class="col-sm-8 ">
        <h2>Vyhladavanie</h2>
        <select  id="dest_dropdown" name="source_dropdown">
            <option value="">Vyberte</option>
            <option value="osoba">Doktor</option>
            <option value="osoba">Sestra</option>
            <option value="osoba">Príjemca</option>
            <option value="osoba">Pacient</option>
            <option value="pobyt">Pobyt</option>
            <option value="liek">Liek</option>
            <option value="vysetrenie">Vyšetrenie</option>
        </select>

        <select disabled="disabled" id="source_dropdown" name="ource_dropdown">
            <option class="label" value="">Vyberte</option>
            <!-- Home Ware -->
            <!--<option value="asd">asd</option>-->
            <option rel="osoba" value="meno">Krsné meno</option>
            <option rel="osoba" value="priezvisko">Priezvisko</option>
            <option rel="osoba" value="oddelenie">Oddelenie</option>>
            <!-- Education -->
            <option rel="pobyt" value="datum_prichodu">Dátum príchodu</option>
            <option rel="pobyt" value="datum_odchodu">Dátum odchodu</option>
            <option rel="pobyt" value="oddelenie">Oddelenie</option>
            <option rel="pobyt" value="pacient">Pacient</option>
            <!-- Books -->
            <option rel="liek" value="nazov">Názov</option>
            <option rel="liek" value="latka">Účinná látka</option>
            <option rel="liek" value="kontradikacia">Kontradikácia</option>

            <option rel="vysetrenie" value="typ">Typ</option>
            <option rel="vysetrenie" value="cas">Dátum a čas</option>
            <option rel="vysetrenie" value="oddelenie">Oddelenie</option>
        </select>

        <div class="input-group">
            <input type="hidden" name="search_param" value="all" id="search_param">
            <input type="text" class="form-control" name="x" placeholder="Search term...">
            <span class="input-group-btn">
                    <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                </span>
        </div>
    </div>

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
                @foreach ($osoby as $osoba)
                    <tr>
                        <td>1</td>
                        <td>$osoba->meno</td>
                        <td>$osoba->priezvisko</td>
                        <td>$osoba->oddelenie</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>



</div>
@include('layouts.footer')
</body>


</html>