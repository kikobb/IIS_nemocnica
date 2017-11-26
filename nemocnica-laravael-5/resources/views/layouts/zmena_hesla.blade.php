<div class="col-sm-6 ">
    <h2>Zmena hesla</h2>
    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
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
            <label for="password">Staré heslo:</label>
            <input type="password" class="form-control" id="password" placeholder=" Heslo" name="password" required>

            @if ($errors->has('password'))
                <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password">Nové heslo:</label>
            <input type="password" class="form-control" id="password" placeholder="Heslo" name="password" required>
            @if ($errors->has('password'))
                <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
            @endif
        </div>


        <div class="form-group">
            <div class="col-md-8">
                <button type="submit" class="btn btn-info btn-lg">
                    <span class="glyphicon glyphicon-save"></span> Zmeniť
                </button>

            </div>
        </div>

    </form>
</div>