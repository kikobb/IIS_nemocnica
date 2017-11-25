/**
 * Created by PhpStorm.
 * User: lucka
 * Date: 25.11.2017
 * Time: 12:51
 */
<html lang="en">
<head>
    <title>Registracia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../public/css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                    <button class="dropbtn">Registrovat</button>
                    <div class="dropdown-content">
                        <a href="#">Zamestnanca</a>
                        <a href="#">Oddelenie</a>
                        <a href="#">Liek</a>
                    </div>
                </div>

                <div class="dropdown">
                    <button class="dropbtn">Zmenit</button>
                    <div class="dropdown-content">
                        <a href="#">Oddelenie</a>
                        <a href="#">Zamestnanca</a>
                        <a href="#">Liek</a>
                    </div>
                </div>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
            </ul>
        </div>


    </div>


    <div class="col-sm-6 ">
        <h2>Registracia - zamestnanca</h2>
        <form action="/action_page.php" >
            <div class="form-group">
                <label for="email">Meno:</label><input type="email" class="form-control" id="email" placeholder="Vložte email" name="email">
            </div>
            <div class="form-group">
                <label for="pwd">Priezvisko:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Vložte email" name="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">Heslo:</label>
                <input type="password" class="form-control" id="pwd" placeholder=" Vložte heslo" name="pwd">
            </div>
            <div class="form-group">
                <label for="email">Email:</label><input type="email" class="form-control" id="email" placeholder="Vložte email" name="email">
            </div>
            <div class="form-group">
                <label for="select1">Pozicia</label>
                <select class="form-control" id="select1">
                    <option>Doktor</option>
                    <option>Sestricka</option>
                    <option>Prijemnca</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pwd">Ulica PCS:</label>
                <input type="password" class="form-control" id="pwd" placeholder=" Vložte heslo" name="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">Mesto:</label>
                <input type="password" class="form-control" id="pwd" placeholder=" Vložte heslo" name="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">Stat:</label>
                <input type="password" class="form-control" id="pwd" placeholder=" Vložte heslo" name="pwd">
            </div>
            <div class="form-group">
                <label for="pwd">Datum Narodenia:</label>
                <input class="form-control" type="date" id="date" placeholder=" 12.12.1975">
            </div>
            <div class="form-group">
                <label for="pwd">Číslo účtu:</label>
                <input type="password" class="form-control" id="pwd" placeholder=" Vložte heslo" name="pwd">
            </div>
            <div class="form-group">
                <label for="select2">Uvazok</label>
                <select class="form-control" id="select2">
                    <option style="background-color:yellow">Plny</option>
                    <option>Polovicny</option>
                    <option>Prax</option>
                </select>
            </div>
            <div class="form-group">
                <label for="pwd">Tefón:</label>
                <input type="password" class="form-control" id="pwd" placeholder="+420955123456" name="pwd">
            </div>
            <a href="#" class="btn btn-info btn-lg">
                <span class="glyphicon glyphicon-user"></span> Registrovat
            </a>
        </form>
    </div>



</div>

@include('layouts.footer')

</body>


</html>