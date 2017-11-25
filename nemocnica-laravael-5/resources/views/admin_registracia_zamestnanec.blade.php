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
                    <button class="dropbtn">Registrovať</button>
                    <div class="dropdown-content">
                        <a href="#">Zamestnanca</a>
                        <a href="#">Oddelenie</a>
                        <a href="#">Liek</a>
                    </div>
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


    <div class="col-sm-6 ">
        <h2>Registrácia - zamestnanca</h2>

        <form method="POST" action="{{ route('register') }}" >
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name">Meno:</label>
                <input type="text" class="form-control" id="name" placeholder="Meno" value="{{ old('name') }}" name="name" required autofocus>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('priezvisko') ? ' has-error' : '' }}">
                <label for="priezvisko">Priezvisko:</label>
                <input type="text" class="form-control" id="priezvisko" placeholder="Priezvisko" value="{{ old('priezvisko') }}" name="priezvisko" required autofocus>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password">Heslo:</label>
                <input type="password" class="form-control" id="password" placeholder="Heslo" name="password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Email" value="{{ old('email') }}" name="email" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('rodne_cislo') ? ' has-error' : '' }}">
                <label for="rodne_cislo">Email:</label>
                <input type="number" class="form-control" id="rodne_cislo" placeholder="Rodné číslo" value="{{ old('rodne_cislo') }}" name="rodne_cislo" required>
                @if ($errors->has('rodne_cislo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rodne_cislo') }}</strong>
                    </span>
                @endif
            </div>


            <div class="form-group">
                <label for="pozicia">Pozicia</label>
                <select class="form-control" id="pozicia" name="pozicia" required>
                    <option>Doktor</option>
                    <option>Sestricka</option>
                    <option>Prijemnca</option>
                </select>
            </div>

            <div class="form-group">
                <label for="mesto">Mesto:</label>
                <input type="text" class="form-control" id="pwd" placeholder=" Mesto" name="pwd">
            </div>

            <div class="form-group">
                <label for="psc">PSČ:</label>
                <input type="text" class="form-control" id="psc" placeholder=" PSC" name="psc">
            </div>

            <div class="form-group">
                <label for="ulica_cislo_domu">Ulica a číslo domu:</label>
                <input type="text" class="form-control" id="ulica_cislo_domu" placeholder=" Ulica a číslo domu" name="ulica_cislo_domu">
            </div>

            <div class="form-group">
                <label for="stat">Stat:</label>
                <input type="text" class="form-control" id="stat" placeholder=" Krajina" name="stat">
            </div>

            <div class="form-group">
                <label for="datum_narodenia">Datum Narodenia:</label>
                <input class="form-control" type="date" id="datum_narodenia" placeholder=" 12.12.1975" name="datum_narodenia">
            </div>

            <div class="form-group">
                <label for="cislo_uctu">Číslo účtu:</label>
                <input type="number" class="form-control" id="cislo_uctu" placeholder=" Čislo_uctu" name="cislo_uctu">
            </div>

            <div class="form-group">
                <label for="uvazok">Uvazok</label>
                <select class="form-control" id="uvazok" name="uvazok" required>
                    <option>Plny</option>
                    <option>Polovicny</option>
                    <option>Prax</option>
                </select>
            </div>

            <div class="form-group">
                <label for="telefon">Telefón:</label>
                <input type="number" class="form-control" id="telefon" placeholder="+420955123456" name="telefon">
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