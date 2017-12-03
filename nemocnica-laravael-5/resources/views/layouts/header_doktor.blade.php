<div class="bg">
    <div class="page-header">
        <img src="/pictures/logo.png">
        <h1>Nemocnica</h1>
    </div>

    <div class="container-fluid">

        <div class="col-md-10">
            <div class = "dropdown">
                <a href="{{ route('zamestnanec.index') }}"><button class="dropbtn"><span class="glyphicon glyphicon-home"></span> Domov</button></a>
            </div>

            <div class="dropdown">
                <a href="{{ route('vyhladavanie.index') }}"><button class="dropbtn">Hľadať</button></a>
            </div>

            <div class="dropdown">
                <a href="{{ route('pobyt.create') }}"><button class="dropbtn">Pridať pobyt</button></a>
            </div>

            <div class="dropdown">
                <a href="{{ route('pacient.create') }}"><button class="dropbtn">Pridať pacienta</button></a>
            </div>

            <div class="dropdown">
                <a href="{{ route('vysetrenie.create') }}"><button class="dropbtn">Vytvoriť správu</button></a>
            </div>

            <div class="dropdown">
                <a href="{{ route('zamestnanec.edit', $currUser->id) }}"><button class="dropbtn">Upraviť profil</button></a>
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