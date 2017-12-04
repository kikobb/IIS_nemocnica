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
             'pobyt' => 'Pobyt'),old('cat_1'), array('id'=>'primary_selector','class'=>'form-control','required' => 'required','placeholder'=>'Vyberte si z možností'))}}
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
                    'vyšetrenie' => 'Vyšetrenie'),old('cat_1'), array('id'=>'primary_selector','class'=>'form-control','placeholder'=>'Vyberte si z možností','required' => 'required'))}}
             @endif

             @if($currUser->pozicia == 'pacient' || $currUser->pozicia == 'admin')
                 {{ Form::select('cat_1',array('doktor' => 'Doktor',
                 'sestra' => 'Sestra',
                 'príjemca' => 'Príjemca',
                 'liek' => 'Liek',
                 'oddelenie' => 'Oddelenie',
                 'izba' => 'Izba',),old('cat_1'), array('id'=>'primary_selector','class'=>'form-control','placeholder'=>'Vyberte si z možností','required' => 'required'))}}
             @endif
        </div>

        <div class="form-group">
                {{ Form::select('cat_2',array('meno' => 'Krstné meno',
                'priezvisko' => 'Priezvisko',
                'oddelenie' => 'Oddelenie',
                'datum_prichodu' => 'Dátum príchodu',
                'datum_odchodu' => 'Dátum odchodu',
                'pacient' => 'Pacient',
                'rodne_cislo' => 'Rodné číslo',
                'nazov' => 'Názov',
                'latka' => 'Účinná látka',
                'typ' => 'Typ',
                'cas' => 'Dátum',
                'poschodie' => 'Poschodie',
                'kapacita' => 'Kapacita',
                'cislo' => 'Číslo',),old('cat_2'), array('id'=>'secondary_selector', 'class'=>'form-control','placeholder'=>'Vyberte si z možností','required' => 'required'))}}
        </div>


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