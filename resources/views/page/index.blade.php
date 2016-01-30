@extends('head')
@section('content')

<div class="wi-ma">
    <center>
        <div style="width: 500px; padding-top: 200px">
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li> {{ $error }} </li>
                    @endforeach
                </div>
            @endif

            <div class="bg-primary" style="font-size: 20px; padding: 5px">Autentificare</div>
            <br>
            <form action="/" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="text" name="email" class="form-control" placeholder="Email" required>
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <input type="submit" value="Logare" class="btn btn-success" style="width: 100%">
            </form>
        </div>
    </center>
</div>

@stop