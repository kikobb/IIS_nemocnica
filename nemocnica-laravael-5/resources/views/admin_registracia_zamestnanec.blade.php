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

{{--    {{ dump($errors) }}--}}
    <div class="col-sm-6 ">
        <h2>Registrácia - zamestnanca</h2>

        <form method="POST" action="{{ route('adminReg') }}" >
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <label for="name">Meno:</label>
                <input type="text" class="form-control" id="name" placeholder="Meno" value="{{ ((isset($name) ) ? $name : old('name')) }}" name="name" required autofocus>
                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('priezvisko') ? ' has-error' : '' }}">
                <label for="priezvisko">Priezvisko:</label>
                <input type="text" class="form-control" id="priezvisko" placeholder="Priezvisko" value="{{ ((isset($priezvisko) ) ? $priezvisko : old('priezvisko')) }}" name="priezvisko" required autofocus>
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
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Email" value="{{ ((isset($email) ) ? $email : old('email')) }}" name="email" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('rodne_cislo') ? ' has-error' : '' }}">
                <label for="rodne_cislo">Rodné číslo:</label>
                <input type="text" class="form-control" id="rodne_cislo" placeholder="Rodné číslo" value="{{((isset($rodne_cislo) ) ? $rodne_cislo :  old('rodne_cislo')) }}" name="rodne_cislo" required>
                @if ($errors->has('rodne_cislo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rodne_cislo') }}</strong>
                    </span>
                @endif
            </div>


            <div class="form-group">
                <label for="pozicia">Pozícia</label>
                <select class="form-control" id="pozicia" name="pozicia" required>
                    <option>Doktor</option>
                    <option>Sestricka</option>
                    <option>Prijemnca</option>
                </select>
            </div>

            <div class="form-group">
                <label for="mesto">Mesto:</label>
                <input type="text" class="form-control" id="mesto" placeholder=" Mesto" value="{{((isset($mesto) ) ? $mesto :  '' )}}" name="mesto">
            </div>

            <div class="form-group">
                <label for="psc">PSČ:</label>
                <input type="text" class="form-control" id="psc" placeholder=" PSC" value="{{((isset($psc) ) ? $psc :  '' )}}" name="psc">
            </div>

            <div class="form-group">
                <label for="ulica_cislo_domu">Ulica a číslo domu:</label>
                <input type="text" class="form-control" id="ulica_cislo_domu" placeholder=" Ulica a číslo domu" value="{{((isset($ulica_cislo_domu) ) ? $ulica_cislo_domu :  '' )}}" name="ulica_cislo_domu">
            </div>

            <div class="form-group">
                <label for="stat">Štát:</label>
                <input type="text" class="form-control" id="stat" placeholder=" Krajina" value="{{((isset($stat) ) ? $stat :  '' )}}"  name="stat">
            </div>

            <div class="form-group">
                <label for="datum_narodenia">Dátum Narodenia:</label>
                <input class="form-control" type="date" id="datum_narodenia" value="{{((isset($datum_narodenia) ) ? $datum_narodenia :  '' )}}" name="datum_narodenia">
            </div>

            <div class="form-group">
                <label for="cislo_uctu">Číslo účtu:</label>
                <input type="text" class="form-control" id="cislo_uctu" placeholder=" Čislo_uctu" value="{{((isset($cislo_uctu) ) ? $cislo_uctu :  '' )}}" name="cislo_uctu">
            </div>

            <div class="form-group">
                <label for="uvazok">Úväzok</label>
                <select class="form-control" id="uvazok" name="uvazok" required>
                    <option>Plný</option>
                    <option>Polovičný</option>
                    <option>Prax</option>
                </select>
            </div>

            <div class="form-group">
                <label for="telefon">Telefón:</label>
                <input type="text" class="form-control" id="telefon" placeholder="+420955123456" value="{{((isset($telefon) ) ? $telefon :  '' )}}" name="telefon">
            </div>

            <!--<a href="#" class="btn btn-info btn-lg">
                <span type="submit" class="glyphicon glyphicon-user"></span> Registrovať
            </a>-->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>



</div>

@include('layouts.footer')

</body>


</html>