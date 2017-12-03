<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <html lang="en">
    <head>
        <title>Nájdené</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="/css/index.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="/js/vyhladavanie.js"></script>
    </head>

<body>
<div class="container">

    @include('layouts.header_prijemca')


    @include('layouts.vyhladavanie')

    <div class="col-sm-10 ">
        <div class="table">
            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Typ</th>
                    <th>Čas</th>
                    <th>Pacient</th>
                    <th>Doktor</th>
                    <th>Oddelenie</th>
                </tr>
                </thead>
                <tbody>
                {{--@foreach ($osoby as $osoba)--}}
                {{--<tr>--}}
                {{--<td>1</td>--}}
                {{--<td>$osoba->meno</td>--}}
                {{--<td>$osoba->priezvisko</td>--}}
                {{--<td>$osoba->oddelenie</td>--}}
                {{--<td><span class="input-group-btn">--}}
                {{--<a href="#"><button class="btn btn-default btn-sm" type="button"><span class="glyphicon glyphicon-pencil"></span></button></a>>--}}
                {{--</span>--}}
                {{--</td>--}}
                {{--</tr>--}}
                {{--@endforeach--}}
                </tbody>
            </table>
        </div>
    </div>


</div>
@include('layouts.footer')
</body>

</html>