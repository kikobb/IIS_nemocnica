<div class="bg">
    <div class="page-header">
        <img src="/pictures/logo.png">
        <h1>Nemocnica</h1>
    </div>

    <div class="container-fluid">


        <div class="col-md-10">
            <div class="dropdown">
                <a href="{{ route('zamestnanec.index') }}"><button class="dropbtn"><span type="submit" class="glyphicon glyphicon-home"></span> Domov</button></a>
            </div>

            <div class="dropdown">
                <a href="{{ route('vyhladavanie.index') }}"><button class="dropbtn">Hľadať</button></a>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Zobraziť</button>
                <div class="dropdown-content">
                    <a href="{{ route('pacient_vysetrenia', $currUser->id) }}">Vyšetrenia</a>
                    <a href="{{ route('pacient_pobyty', $currUser->id) }}">Pobyty</a>
                    <a href="{{ route('pacient_pobyty', $currUser->id) }}">Lieky</a>
                </div>
            </div>

            <div class="dropdown">
                <a href="zmenit_heslo"><button class="dropbtn">Zmeniť heslo</button></a>
            </div>
        </div>

        <div class="col-md-2">
            {{ Form::open(['route' => 'logout', 'method' => 'post']) }}
            <div class="dropdown" id="logout">
                {{ Form::button('<span class="glyphicon glyphicon-log-out"></span> Odhlásiť',  array('class'=>'dropbtn','type'=>'submit','id'=>'logout')) }}
            </div>
            {{Form::close()}}
        </div>

    </div>
</div>