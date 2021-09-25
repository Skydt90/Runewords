@extends('backbone')

@section('content')

    <rune-index
        :runes="{{ json_encode($runes) }}">
    </rune-index>

@endsection
