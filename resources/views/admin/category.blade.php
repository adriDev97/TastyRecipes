@extends('layouts.app')
@section('content')
    <div class="margin">
        <div class="container">
            <h1 class="mb-5">Admin Categories</h1>
            @include('errors')
            @include('alerts')
            @include('categories.create')              
            <hr class="my-5">
            @include('categories.list')
        </div>
    </div>
@endsection