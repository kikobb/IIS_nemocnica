<div class="col-sm-8 ">
    <h2>Vyhľadávanie</h2>
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