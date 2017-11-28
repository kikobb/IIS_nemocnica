<div class="col-sm-6 ">
    <h2>Upravovanie profilu</h2>

    <form method="POST" action="{{ route('register') }}" >
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
            <label for="name">Meno:</label>
            <input type="text" class="form-control" id="name"   name="name" value="Lucka" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('priezvisko') ? ' has-error' : '' }}">
            <label for="priezvisko">Priezvisko:</label>
            <input type="text" class="form-control" id="priezvisko"   name="priezvisko" value="Tusimova" required autofocus>
            @if ($errors->has('name'))
                <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
            @endif
        </div>


        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="lucka.tusomova@gmail.com" required>
            @if ($errors->has('email'))
                <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('rodne_cislo') ? ' has-error' : '' }}">
            <label for="rodne_cislo">Rodné číslo:</label>
            <input type="text" class="form-control" id="rodne_cislo" name="rodne_cislo" value="989898/9898" required>
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
            <input type="text" class="form-control" id="mesto" name="mesto" value="Zvolen">
        </div>

        <div class="form-group">
            <label for="psc">PSČ:</label>
            <input type="text" class="form-control" id="psc" name="psc" value="96001">
        </div>

        <div class="form-group">
            <label for="ulica_cislo">Ulica a číslo domu:</label>
            <input type="text" class="form-control" id="ulica_cislo" name="ulica_cislo" value="Kvietkova 11">
        </div>

        <div class="form-group">
            <label for="stat">Stat:</label>
            <input type="text" class="form-control" id="stat" name="stat" value="Kanada">
        </div>

        <div class="form-group">
            <label for="datum_narodenia">Datum Narodenia:</label>
            <input class="form-control" type="date" id="datum_narodenia" name="datum_narodenia" value="19-10-1996">
        </div>

        <div class="form-group">
            <label for="cislo_uctu">Číslo účtu:</label>
            <input type="text" class="form-control" id="cislo_uctu" name="cislo_uctu" value="98ds9f8s9d">
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
            <input type="text" class="form-control" id="telefon" name="telefon" value="+421944573654">
        </div>

        <a href="#" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-save"></span> Uložiť zmeny
        </a>

        <a href="#" class="btn btn-info btn-lg">
            <span class="glyphicon glyphicon-edit"></span> Zmeniť heslo
        </a>


    </form>
</div>