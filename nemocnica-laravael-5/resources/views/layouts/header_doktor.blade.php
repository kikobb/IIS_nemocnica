<div class="bg">
    <div class="page-header">
        <img src="/pictures/logo.png">
        <h1>Nemocnica</h1>
    </div>

    <div class="container-fluid">


            <div class="dropdown">
                <a href="/zamestnanec"><button class="dropbtn"><span class="glyphicon glyphicon-home"></span> Domov</button></a>
            </div>

            <div class="dropdown">
                <a href="/vyhladavanie"><button class="dropbtn">Hľadať</button></a>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Pridať pobyt</button>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Pridať pacienta</button>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Vytvoriť správu</button>
            </div>

            <div class="dropdown">
                <button class="dropbtn">Upraviť profil</button>
            </div>

        {{ Form::open(['route' => 'logout', 'method' => 'post']) }}
        <div class="dropdown" id="logout">
            {{ Form::button('<span class="glyphicon glyphicon-log-out"></span> Odhlásiť',  array('class'=>'dropbtn','type'=>'submit','id'=>'logout')) }}
        </div>
        {{Form::close()}}
    </div>
</div>