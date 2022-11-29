@extends('layouts.app')

@section('content')
    <div class="margin">
       <div class="container">
            @include('recipes.list')
        </div>
    </div>
@endsection
