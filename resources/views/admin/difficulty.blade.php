@extends('layouts.app')
@section('content')
    <div class="margin">
        <div class="container">
            <h1 class="mb-5">Admin Difficulties</h1>
            @include('errors')
            @include('alerts')
            @include('difficulties.create')
            <hr class="my-5">
            @include('difficulties.list')
        </div>
    </div>
@endsection