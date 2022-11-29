@extends('layouts.app')
@section('content')
    <div class="container margin">
    @include('errors')
        <form action="{{ route('difficulties.update', $difficulty) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="difficulty" class="col-form-label">Difficulty</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="difficulty" class="form-control" name="difficulty" value="{{ $difficulty->difficulty }}">
                </div>
                <div class="col-auto">
                    <input type="submit" class="btn btn-outline-warning" value="Update">
                </div>
            </div>
        </form>
    </div>
@endsection