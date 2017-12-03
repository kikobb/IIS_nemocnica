<div class="col-sm-8 ">
    <h2>Vyhľadávanie</h2>
    <form method="POST" action="{{ route('vyhladavanie.store') }}" >

        <div class="form-group">
            <select  id="dest_dropdown" name="dest_dropdown" class="form-control">
                <option value="">Vyberte</option>
                <option value="osoba">Doktor</option>
                <option value="osoba">Sestra</option>
                <option value="osoba">Príjemca</option>
                <option value="liek">Liek</option>
                <option value="oddelenie">Oddelenie</option>
                <option value="izba">Izba</option>
                @if($currUser->pozicia == 'doktor' || $currUser->pozicia == 'sestra' || $currUser->pozicia == 'prijemca')
                    <option value="osoba">Pacient</option>
                    <option value="pobyt">Pobyt</option>
                    @if($currUser->pozicia == 'doktor' || $currUser->pozicia == 'sestra')
                    <option value="vysetrenie">Vyšetrenie</option>
                    @endif
                @endif
            </select>
        </div>

        <div class="form-group">
            <select disabled="disabled" id="source_dropdown" name="source_dropdown" class="form-control">
                <option class="label" value="">Vyberte</option>

                <option rel="osoba" value="meno">Krsné meno</option>
                <option rel="osoba" value="priezvisko">Priezvisko</option>
                <option rel="osoba" value="oddelenie">Oddelenie</option>>

                <option rel="pobyt" value="datum_prichodu">Dátum príchodu</option>
                <option rel="pobyt" value="datum_odchodu">Dátum odchodu</option>
                <option rel="pobyt" value="oddelenie">Oddelenie</option>
                <option rel="pobyt" value="pacient">Pacient</option>

                <option rel="liek" value="nazov">Názov</option>
                <option rel="liek" value="latka">Účinná látka</option>

                <option rel="vysetrenie" value="typ">Typ</option>
                <option rel="vysetrenie" value="cas">Dátum</option>
                <option rel="vysetrenie" value="oddelenie">Oddelenie</option>

                <option rel="oddelenie" value="nazov">Názov</option>
                <option rel="oddelenie" value="poschodie">Poschodie</option>

                <option rel="izba" value="typ">Typ</option>
                <option rel="izba" value="kapacita">Kapacita</option>
                <option rel="izba" value="cislo">Číslo</option>
            </select>
        </div>

        <div class="input-group">
            {{--<input type="hidden" name="search_param" value="all" id="search_param">--}}
            <div class="form-group">
                <input type="text" class="form-control" name="vyhladavanie" placeholder="Zadajte slovo na vyhľadávanie...">
            </div>
                <span class="input-group-btn">
                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
            </span>
        </div>
    </form>
</div>