@extends('layouts.app')
@section('content')
    <div class="margin">
        <div class="container">
            <h1 class="mb-5">Admin Recipes</h1>
            @include('recipes.creationForm')
        </div>
    </div>
@endsection
