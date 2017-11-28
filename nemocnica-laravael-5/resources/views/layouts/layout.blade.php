<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <html lang="en">
    <head>
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

    @include('layouts.header_admin')

    {{--@if($currUser == 'doktor')--}}
            {{--@include('layouts.header_doktor')--}}
        {{--@elseif($currUser == 'sestra')--}}
            {{--@include('layouts.header_sestra')--}}
        {{--@elseif($currUser == 'prijemca')--}}
            {{--@include('layouts.header_prijemca')--}}
        {{--@elseif($currUser == 'pacient')--}}
            {{--@include('layouts.header_pacient')--}}
        {{--@elseif($currUser == 'admin')--}}
            {{--@include('layouts.header_admin')--}}
        {{--@else--}}
            {{--@include('layouts.header_neprihlaseny')--}}
    {{--@endif--}}

    @yield('content')

</div>
@include('layouts.footer')
</body>

</html>