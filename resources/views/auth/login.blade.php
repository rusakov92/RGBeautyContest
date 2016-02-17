@extends('main')

@section('content')
    <main class="Main">
        <img class="Logo" src="images/tiara.png">
        <div class="Title">
            <h1>RG Beauty Contest</h1>
        </div>

        <form method="POST" action="{{ action('Auth\AuthController@postLogin') }}" class="Form form-inline">
            {!! csrf_field() !!}

            <div class="form-group has-error">
                <input type="text"
                       name="name"
                       class="form-control"
                       placeholder="Your code"
                       title="Enter your unique password that we give you."
                       required
                       autofocus
                >
            </div>

            <input type="submit" class="Form__button btn btn-default" value="Enter">
        </form>

        @if (count($errors) > 0)
            <ul class="List col-md-6 alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </main>
@endsection
