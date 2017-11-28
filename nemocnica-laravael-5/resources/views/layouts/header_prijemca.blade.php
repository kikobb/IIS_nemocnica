<div class="bg">
    <div class="page-header">
        <img src="/pictures/logo.png">
        <h1>Nemocnica</h1>
    </div>

    <div class="container-fluid">
        {{ Form::open(['route' => 'logout', 'method' => 'post']) }}

            <div class="dropdown">
                <a href="home_zamestnanec"><button class="dropbtn"><span type="submit" class="glyphicon glyphicon-home"></span> Domov</button></a>
            </div>

            <div class="dropdown">
                <a href="#"><button class="dropbtn">Hľadať</button></a>
            </div>

            <div class="dropdown">
                <a href="#"><button class="dropbtn">Pridať pobyt</button></a>
            </div>

            <div class="dropdown">
                <a href="#"><button class="dropbtn">Pridať pacienta</button></a>
            </div>

            <div class="dropdown">
                <a href="#"><button class="dropbtn">Upraviť profil</button></a>
            </div>


        <div class="dropdown" id="logout">
            {{ Form::button('<span class="glyphicon glyphicon-log-out"></span> Odhlásiť',  array('class'=>'dropbtn','type'=>'submit','id'=>'logout')) }}
        </div>
        {{Form::close()}}
1

    </div>

</div>