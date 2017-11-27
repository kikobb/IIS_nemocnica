<!doctype html>
<html lang="en">
<head>
    <title>Registracia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="/css/index.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">

    @include('layouts.header_admin')


    <div class="col-sm-6 ">
        <h2>Registrácia - izby</h2>

        <form method="POST" action="{{ route('izbaReg') }}" >
            {{ csrf_field() }}


            <div class="form-group">
                <label for="typ">Typ<span style="color:red;">*</span></label>
                <select class="form-control" id="typ" name="typ" required>
                    <option @if (((isset($minuleHodnoty)) && $minuleHodnoty->input('typ')== 'Ženy')) selected="selected" @endif>Ženy</option>
                    <option @if (((isset($minuleHodnoty)) && $minuleHodnoty->input('typ')== 'Muži')) selected="selected" @endif>Muži</option>
                    <option @if (((isset($minuleHodnoty)) && $minuleHodnoty->input('typ')== 'Deti-chlapci')) selected="selected" @endif>Deti-chlapci</option>
                    <option @if (((isset($minuleHodnoty)) && $minuleHodnoty->input('typ')== 'Deti-dievčatá')) selected="selected" @endif>Deti-dievčatá</option>
                </select>
            </div>

            <div class="form-group">
                <label for="kapacita">Kapacita<span style="color:red;">*</span>:</label>
                <input type="number" class="form-control" id="kapacita" placeholder="1"  value="{{((isset($minuleHodnoty) ) ? $minuleHodnoty->input('kapacita') : '' )}}" name="kapacita" required>
                @if ($errors->has('kapacita'))
                    <span class="help-block">
                        <strong>{{ $errors->first('kapacita') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="cislo">Číslo:</label>
                <input type="number" class="form-control" id="cislo" placeholder="1"  value="{{((isset($minuleHodnoty) ) ? $minuleHodnoty->input('cislo') : '' )}}" name="cislo">
                @if ($errors->has('cislo'))
                    <span class="help-block">
                        <strong>{{ $errors->first('cislo') }}</strong>
                    </span>
                @endif
            </div>


            <div class="form-group">
                <label for="oddelenie">Oddelenie<span style="color:red;">*</span>:</label>
                <select class="form-control" id="oddelenie" name="oddelenie" required>
                    @isset($oddelenia)
                        @foreach ($oddelenia as $oddelenie)
                        <option @if (((isset($minuleHodnoty)) && $minuleHodnoty->input('oddelenie')== $oddelenie)) selected="selected" @endif>{{$oddelenie}}</option>
                    @endforeach
                        @endisset

                </select>
            </div>


            <button type="submit" class="btn btn-info btn-lg"><span class="glyphicon glyphicon-user"></span>Registrovať</button>

            <div class="form-group">
                <span style="color:red;">*</span> - sú označené povinné údaje
            </div>
        </form>
    </div>



</div>

@include('layouts.footer')

</body>


</html>