@extends('layouts.app')
@section('content')
    <div class="margin">
        <div class="container">
            <h1 class="mb-5">Admin Roles</h1>
            @include('errors')
            @include('alerts')
            @include('roles.create')
            <hr class="my-5">
            @include('roles.list')
        </div>
    </div>
@endsection