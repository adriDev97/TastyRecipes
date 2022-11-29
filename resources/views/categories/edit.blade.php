@extends('layouts.app')
@section('content')
    <div class="container margin">
        <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="name" class="col-form-label">Category name</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="name" class="form-control" name="name" value="{{ $category->name }}">
                </div>
                <div class="col-auto">
                    <input type="submit" class="btn btn-outline-warning" value="Update">
                </div>
            </div>
        </form>
    </div>
@endsection