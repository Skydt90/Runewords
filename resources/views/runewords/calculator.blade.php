@extends('backbone')

@section('content')

    <runeword-calculator
        :runes="{{ json_encode($runes) }}"
        :runewords="{{ json_encode($runewords) }}">
    </runeword-calculator>

@endsection
