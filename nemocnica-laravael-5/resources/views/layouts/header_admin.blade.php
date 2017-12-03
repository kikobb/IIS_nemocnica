<div class="bg">
    <div class="page-header">
        <img src="/pictures/logo.png">
        <h1>Nemocnica</h1>
    </div>

    <div class="container-fluid">

        <div class="col-md-10">
            <div class="dropdown">
                <a href="{{ route('zamestnanec.index') }}"><button class="dropbtn"><span class="glyphicon glyphicon-home"></span> Domov</button></a>
            </div>

            <div class="dropdown">
                <a href="{{ route('vyhladavanie') }}"><button class="dropbtn">Hľadať</button></a>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Registrovať</button>
                <div class="dropdown-content">
                    <a href="{{ route('zamestnanec.create') }}">Zamestnanca</a>
                    <a href="{{ route('oddelenie.create') }}">Oddelenie</a>
                    <a href="{{ route('izba.create') }}">Izba</a>
                    <a href="{{ route('liek.create') }}">Liek</a>
                </div>
            </div>

            <div class="dropdown">
                <a href="{{ route('admin.edit', $currUser->id) }}"><button class="dropbtn">Upraviť profil</button></a>
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