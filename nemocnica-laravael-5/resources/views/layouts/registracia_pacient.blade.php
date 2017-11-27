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
                        <strong>{{ $errors->first('password') }}</strong>
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
            <label for="rodne_cislo">Rodné číslo:</label>
            <input type="text" class="form-control" id="rodne_cislo" placeholder="Rodné číslo" name="rodne_cislo" required>
            @if ($errors->has('rodne_cislo'))
                <span class="help-block">
                        <strong>{{ $errors->first('rodne_cislo') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('rodne_cislo') ? ' has-error' : '' }}">
            <label for="cislo_poistovne">Číslo poisťovne:</label>
            <input type="number" class="form-control" id="rodne_cislo" placeholder="Číslo poisťovne" name="cislo_poistovne" required>
            @if ($errors->has('cislo_poistovne'))
                <span class="help-block">
                        <strong>{{ $errors->first('cislo_poistovne') }}</strong>
                    </span>
            @endif
        </div>


        <div class="form-group">
            <label for="mesto">Mesto:</label>
            <input type="text" class="form-control" id="mesto" placeholder=" Mesto" name="mesto">
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
            <label for="datum_narodenia">Dátum Narodenia:</label>
            <input class="form-control" type="date" id="datum_narodenia" placeholder=" 12.12.1975" name="datum_narodenia">
        </div>


        <a href="#" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-user"></span> Registrovať
        </a>
    </form>
</div>