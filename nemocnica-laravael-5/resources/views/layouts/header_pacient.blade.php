<div class="bg">
    <div class="page-header">
        <img src="/pictures/logo.png">
        <h1>Nemocnica</h1>
    </div>

    <div class="container-fluid">


        <div class="dropdown">
            <a href="/zamestnanec"><button class="dropbtn"><span type="submit" class="glyphicon glyphicon-home"></span> Domov</button></a>
        </div>

        <div class="dropdown">
            <a href="/vyhladavanie"><button class="dropbtn">Hľadať</button></a>
        </div>

        <div class="dropdown">
            <button class="dropbtn">Zobraziť</button>
            <div class="dropdown-content">
                <a href="#">Vyšetrenia</a>
                <a href="#">Pobyty</a>
                <a href="#">Lieky</a>
            </div>
        </div>

        <div class="dropdown">
            <a href="zmenit_heslo"><button class="dropbtn">Zmeniť heslo</button></a>
        </div>

        {{ Form::open(['route' => 'logout', 'method' => 'post']) }}
        <div class="dropdown" id="logout">
            {{ Form::button('<span class="glyphicon glyphicon-log-out"></span> Odhlásiť',  array('class'=>'dropbtn','type'=>'submit','id'=>'logout')) }}
        </div>
        {{Form::close()}}

    </div>
</div>