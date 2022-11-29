@extends('layouts.app')
@section('content')
    <div class="margin">
        <div class="container">
            <h1 class="mb-5">Assing Roles</h1>
            @include('errors')
            @include('alerts')
            @include('roleUsers.create')
            <hr class="my-5">
            @include('roleUsers.list')
        </div>
    </div>
@endsection