<div class="col-sm-8 ">
    <h2>Vyhľadávanie</h2>
    {{ Form::open(['route' => 'vyhladavanie.store', 'method' => 'post', 'class' => 'form']) }}

        <div class="form-group">
            @if($currUser->pozicia == 'prijemca')
            {{ Form::select('cat_1',array('doktor' => 'Doktor',
             'sestra' => 'Sestra',
             'príjemca' => 'Príjemca',
             'liek' => 'Liek',
             'oddelenie' => 'Oddelenie',
             'izba' => 'Izba',
             'pacient' => 'Pacient',
             'pobyt' => 'Pobyt'),old('dest_dropdown'), array('class'=>'form-control','required' => 'required','placeholder'=>'Vyberte'))}}
             @endif

             @if($currUser->pozicia == 'doktor' || $currUser->pozicia == 'sestra')
                    {{ Form::select('cat_1',array('doktor' => 'Doktor',
                     'sestra' => 'Sestra',
                     'príjemca' => 'Príjemca',
                     'liek' => 'Liek',
                     'oddelenie' => 'Oddelenie',
                     'izba' => 'Izba',
                     'pacient' => 'Pacient',
                     'pobyt' => 'Pobyt',
                    'vyšetrenie' => 'Vyšetrenie'),old('dest_dropdown'), array('class'=>'form-control','placeholder'=>'Vyberte','required' => 'required'))}}
             @endif

             @if($currUser->pozicia == 'pacient' || $currUser->pozicia == 'admin')
                 {{ Form::select('cat_1',array('doktor' => 'Doktor',
                 'sestra' => 'Sestra',
                 'príjemca' => 'Príjemca',
                 'liek' => 'Liek',
                 'oddelenie' => 'Oddelenie',
                 'izba' => 'Izba',),old('dest_dropdown'), array('class'=>'form-control','required' => 'required','placeholder'=>'Vyberte'))}}
             @endif
        </div>

        <div class="form-group">
                {{ Form::select('cat_2',array('meno' => 'Krstné meno',
                'priezvisko' => 'Priezvisko',
                'oddelenie' => 'Oddelenie',
                'datum_prichodu' => 'Dátum príchodu',
                'datum_odchodu' => 'Dátum odchodu',
                'pacient' => 'Pacient',
                'nazov' => 'Názov',
                'latka' => 'Účinná látka',
                'typ' => 'Typ',
                'cas' => 'Dátum',
                'poschodie' => 'Poschodie',
                'kapacita' => 'Kapacita',
                'cislo' => 'Číslo',),old('dest_dropdown'), array('class'=>'form-control','required' => 'required','placeholder'=>'Vyberte'))}}
        </div>


            {{--<select disabled="disabled" id="source_dropdown" name="source_dropdown" class="form-control">--}}
                {{--<option class="label" value="">Vyberte</option>--}}

                {{--<option rel="osoba" value="meno">Krsné meno</option>--}}
                {{--<option rel="osoba" value="priezvisko">Priezvisko</option>--}}
                {{--<option rel="osoba" value="oddelenie">Oddelenie</option>>--}}

                {{--<option rel="pobyt" value="datum_prichodu">Dátum príchodu</option>--}}
                {{--<option rel="pobyt" value="datum_odchodu">Dátum odchodu</option>--}}
                {{--<option rel="pobyt" value="oddelenie">Oddelenie</option>--}}
                {{--<option rel="pobyt" value="pacient">Pacient</option>--}}

                {{--<option rel="liek" value="nazov">Názov</option>--}}
                {{--<option rel="liek" value="latka">Účinná látka</option>--}}

                {{--<option rel="vysetrenie" value="typ">Typ</option>--}}
                {{--<option rel="vysetrenie" value="cas">Dátum</option>--}}
                {{--<option rel="vysetrenie" value="oddelenie">Oddelenie</option>--}}

                {{--<option rel="oddelenie" value="nazov">Názov</option>--}}
                {{--<option rel="oddelenie" value="poschodie">Poschodie</option>--}}

                {{--<option rel="izba" value="typ">Typ</option>--}}
                {{--<option rel="izba" value="kapacita">Kapacita</option>--}}
                {{--<option rel="izba" value="cislo">Číslo</option>--}}
            {{--</select>--}}
        {{--</div>--}}

        <div class="input-group">
            {{--<input type="hidden" name="search_param" value="all" id="search_param">--}}
            <div class="form-group">
                {{ Form::text('vyhladavanie', old('vyhladavanie'),array('placeholder'=>'Zadajte slovo na vyhľadávanie...','class'=>'form-control')) }}
            </div>
                <span class="input-group-btn">
                    {{ Form::button('<span class="glyphicon glyphicon-search"></span>',  array('class'=>'btn btn-default','type'=>'submit')) }}
            </span>
        </div>
    {{ Form::close() }}
</div>