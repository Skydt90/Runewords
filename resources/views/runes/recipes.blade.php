@extends('backbone')

@section('content')

    <rune-recipes
        :rune_recipes="{{ json_encode($runeRecipes) }}">
    </rune-recipes>

@endsection
