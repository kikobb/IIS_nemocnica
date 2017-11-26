<div class="col-sm-6 ">
    <h2>Upravovanie profilu</h2>

    <form method="POST" action="{{ route('register') }}" >
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name">Meno:</label>
            <input type="text" class="form-control" id="name"   name="name" value="{{((isset($name) ) ? $name :  '' )}}" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('priezvisko') ? ' has-error' : '' }}">
            <label for="priezvisko">Priezvisko:</label>
            <input type="text" class="form-control" id="priezvisko"   name="priezvisko" value="{{((isset($priezvisko) ) ? $priezvisko :  '' )}}" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{((isset($email) ) ? $email :  '' )}}" required>
            @if ($errors->has('email'))
                <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group">
            <label for="mesto">Mesto:</label>
            <input type="text" class="form-control" id="mesto" name="mesto" value="{{((isset($mesto) ) ? $mesto :  '' )}}">
        </div>

        <div class="form-group">
            <label for="psc">PSČ:</label>
            <input type="text" class="form-control" id="psc" name="psc" value="{{((isset($psc) ) ? $psc :  '' )}}">
        </div>

        <div class="form-group">
            <label for="ulica_cislo_domu">Ulica a číslo domu:</label>
            <input type="text" class="form-control" id="ulica_cislo_domu" name="ulica_cislo_domu" value="{{((isset($ulica_cislo_domu) ) ? $ulica_cislo_domu :  '' )}}">
        </div>

        <div class="form-group">
            <label for="stat">Štát:</label>
            <input type="text" class="form-control" id="stat" name="stat" value="{{((isset($stat) ) ? $stat :  '' )}}">
        </div>

        <div class="form-group">
            <label for="telefon">Telefón:</label>
            <input type="text" class="form-control" id="telefon" name="telefon" value="{{((isset($telefon) ) ? $telefon :  '' )}}">
        </div>

        <a href="#" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-user"></span> Uložiť
        </a>

        <a href="zmena_hesla" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-edit"></span> Zmeniť heslo
        </a>


    </form>
</div>