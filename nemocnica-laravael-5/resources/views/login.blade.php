<!doctype html>
<html lang="en">
<head>
    <title>Index</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="/css/index.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">

    <div class="bg">
        <div class="page-header">
            <img src="/pictures/logo.png">
            <h1>Nemocnica</h1>
        </div>
    </div>


    <div class="col-sm-6 ">
        <h2>Prihlásenie </h2>
        <form class="form-horizontal" method="POST" action="{{ route('home') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email">Emailová adresa:</label>
                <input type="email" class="form-control" id="email" placeholder=" Email" name="email"  value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>


            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password">Heslo:</label>
                <input type="password" class="form-control" id="password" placeholder=" Heslo" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>

            <div class="form-group">
                <div class="col-md-6">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Zapamätať si ma
                        </label>
                    </div>
                </div>
            </div>


            <div class="form-group">
                <div class="col-md-8">
                    <button type="submit" class="btn btn-info btn-lg">
                        <span class="glyphicon glyphicon-log-in"></span> Prihlásiť
                    </button>

                    <a class="btn btn-link" href="/heslo">
                        Zabudli ste heslo?
                    </a>
                </div>
            </div>

        </form>
    </div>
</div>



@include ('layouts.footer')

</body>



</html>