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
        <h2>Registrácia - zamestnanca</h2>

        <form method="POST" action="{{ route('zamestnanecReg') }}" >
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('name') ? ' has-errors' : '' }}">
                <label for="name">Meno<span style="color:red;">*</span>:</label>
                <input type="text" class="form-control" id="name" placeholder="Meno" value="{{((isset($minuleHodnoty) ) ? $minuleHodnoty->input('name') : '' )}}" name="name" required autofocus>

                @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>


            <div class="form-group{{ $errors->has('priezvisko') ? ' has-errors' : '' }}">
                <label for="priezvisko">Priezvisko<span style="color:red;">*</span>:</label>
                <input type="text" class="form-control" id="priezvisko" placeholder="Priezvisko" value="{{((isset($minuleHodnoty) ) ? $minuleHodnoty->input('priezvisko') : '' )}}" name="priezvisko" required autofocus>
                @if ($errors->has('priezvisko'))
                    <span class="help-block">
                        <strong>{{ $errors->first('priezvisko') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-errors' : '' }}">
                <label for="password">Heslo<span style="color:red;">*</span>:</label>
                <input type="password" class="form-control" id="password" placeholder="Heslo" name="password" required>
                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-errors' : '' }}">
                <label for="email">Email<span style="color:red;">*</span>:</label>
                <input type="email" class="form-control" id="email" placeholder="Email" value="{{((isset($minuleHodnoty) ) ? $minuleHodnoty->input('email') : '' )}}" name="email" required>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group{{ $errors->has('rodne_cislo') ? ' has-errors' : '' }}">
                <label for="rodne_cislo">Rodné číslo<span style="color:red;">*</span>:</label>
                <input type="text" class="form-control" id="rodne_cislo" placeholder="Rodné číslo" value="{{((isset($minuleHodnoty) ) ? $minuleHodnoty->input('rodne_cislo') : '' )}}" name="rodne_cislo" required>
                @if ($errors->has('rodne_cislo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rodne_cislo') }}</strong>
                    </span>
                @endif
            </div>


            <div class="form-group">
                <label for="pozicia">Pozícia<span style="color:red;">*</span></label>
                <select class="form-control" id="pozicia" name="pozicia" required>
                    <option @if (((isset($minuleHodnoty)) && $minuleHodnoty->input('pozicia')=='Doktor')) selected="selected" @endif>Doktor</option>
                    <option @if (((isset($minuleHodnoty)) && $minuleHodnoty->input('pozicia')=='Sestrička')) selected="selected" @endif>Sestrička</option>
                    <option @if (((isset($minuleHodnoty)) && $minuleHodnoty->input('pozicia')=='Príjemca')) selected="selected" @endif>Príjemca</option>
                </select>
            </div>

            <div class="form-group">
                <label for="mesto">Mesto:</label>
                <input type="text" class="form-control" id="mesto" placeholder=" Mesto" value="{{((isset($minuleHodnoty) ) ? $minuleHodnoty->input('mesto') : '' )}}" name="mesto">
                @if ($errors->has('mesto'))
                    <span class="help-block">
                        <strong>{{ $errors->first('mesto') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="psc">PSČ:</label>
                <input type="text" class="form-control" id="psc" placeholder=" PSC" value="{{((isset($minuleHodnoty) ) ? $minuleHodnoty->input('psc') : '' )}}" name="psc">
                @if ($errors->has('psc'))
                    <span class="help-block">
                        <strong>{{ $errors->first('psc') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="ulica_cislo">Ulica a číslo domu:</label>
                <input type="text" class="form-control" id="ulica_cislo" placeholder=" Ulica a číslo domu" value="{{((isset($minuleHodnoty) ) ? $minuleHodnoty->input('ulica_cislo') : '' )}}" name="ulica_cislo">
                @if ($errors->has('ulica_cislo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('ulica_cislo') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="stat">Štát:</label>
                <input type="text" class="form-control" id="stat" placeholder=" Krajina" value="{{((isset($minuleHodnoty) ) ? $minuleHodnoty->input('stat') : '' )}}"  name="stat">
                @if ($errors->has('stat'))
                    <span class="help-block">
                        <strong>{{ $errors->first('stat') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="datum_narodenia">Dátum Narodenia:</label>
                <input class="form-control" type="date" id="datum_narodenia" value="{{((isset($minuleHodnoty) ) ? $minuleHodnoty->input('datum_narodenia') : '' )}}" name="datum_narodenia">
                @if ($errors->has('datum_narodenia'))
                    <span class="help-block">
                        <strong>{{ $errors->first('datum_narodenia') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="cislo_uctu">Číslo účtu:</label>
                <input type="text" class="form-control" id="cislo_uctu" placeholder=" Čislo_uctu" value="{{((isset($minuleHodnoty) ) ? $minuleHodnoty->input('cislo_uctu') :   '' )}}" name="cislo_uctu">
                @if ($errors->has('cislo_uctu'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cislo_uctu') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="uvazok">Úväzok<span style="color:red;">*</span></label>
                <select class="form-control" id="uvazok" name="uvazok" required>
                    <option @if (((isset($minuleHodnoty)) && $minuleHodnoty->input('uvazok')=='Plný')) selected="selected" @endif>Plný</option>
                    <option @if (((isset($minuleHodnoty)) &&  $minuleHodnoty->input('uvazok')=='Polovičný')) selected="selected" @endif>Polovičný</option>
                    <option @if (((isset($minuleHodnoty)) &&  $minuleHodnoty->input('uvazok')=='Prax')) selected="selected" @endif>Prax</option>
                </select>

            </div>

            <div class="form-group">
                <label for="telefon">Telefón:</label>
                <input type="text" class="form-control" id="telefon" placeholder="+420955123456" value="{{((isset($telefon) ) ? $telefon :  '' )}}" name="telefon">
                @if ($errors->has('telefon'))
                    <span class="help-block">
                        <strong>{{ $errors->first('telefon') }}</strong>

                    </span>
                @endif
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