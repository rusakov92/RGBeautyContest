@extends('main')

@push('head-scripts')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.2-rc.1/js/select2.min.js"></script>
@endpush

@section('content')
    <div class="Middle">
        <main id="main" class="Main">
            <div class="Title__question">
                <h1>Mirror, mirror on the wall, who’s the fairest of them all!</h1>
                <h3>Who deserves to be RG’s Beauty Queen?</h3>
            </div>

            <div class="Form--vote">
                <form method="POST" action="{{ action('HomeController@store') }}" id="form" class="form-inline">
                    {!! csrf_field() !!}

                    @foreach($votes as $vote)
                        <input type="hidden" id="hidden_{{ $vote['id'] }}" name="queens[]" value="{{ $vote['id'] }}" />
                    @endforeach

                    <select id="queens"
                            class="Queens form-control"
                            style=" width: 70%"
                            multiple="multiple"
                            title="Please select at least 3 names"
                    >
                        @foreach($votes as $vote)
                            <option value="{{ $vote['id'] }}" selected="selected">{{ $vote['name'] }}</option>
                        @endforeach
                    </select>

                    @if (! Auth::user()->hasVoted())
                        <input type="submit" class="Form__button--vote btn btn-default" value="Vote">
                    @endif
                    <a href="{{ action('Auth\AuthController@getLogout') }}" class="btn btn-default">Logout</a>
                </form>

                @if (Session::has('success'))
                    <p id="success" class="Message alert alert-success">{{ Session::get('success') }}</p>
                @endif

                @if (count($errors) > 0)
                    <ul class="List alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </main>
    </div>
@endsection

@push('body-scripts')
<script type="text/javascript">
    var queens = $('#queens');
    var form = $('#form');
    var main = $('#main')

    queens.select2({
        data: {!! $queens !!},
        maximumSelectionLength: 7,
        placeholder: 'Please select at least 3 names',
        disabled: {{ Auth::user()->hasVoted() ? 1 : 0 }}
    });

    queens.on('select2:select', function (e) {
        var queenId = e.params.data.id;

        form.append('<input type="hidden" id="hidden_' + queenId + '" name="queens[]" value="' + queenId + '" />');
    });

    queens.on('select2:unselect', function (e) {
        var queenId = e.params.data.id;

        $('#hidden_' + queenId).remove();
    });

    (function () {
        var successMessage = $('#success');

        if (successMessage.length) {
            setTimeout(function () {
                successMessage.css('opacity', 0);
            }, 3000);
        }
    })()
</script>
@endpush
