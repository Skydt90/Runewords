@extends('backbone')

@section('content')

    <runeword-index
        :runewords="{{ json_encode($runewords) }}">
    </runeword-index>

@endsection
