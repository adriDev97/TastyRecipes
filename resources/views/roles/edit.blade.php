@extends('layouts.app')
@section('content')
    <div class="container margin">
    @include('errors')
        <form action="{{ route('roles.update', $role) }}" method="POST">
        @csrf
        @method('PUT')
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label for="role" class="col-form-label">Role</label>
                </div>
                <div class="col-auto">
                    <input type="text" id="role" class="form-control" name="role" value="{{ $role->role }}">
                </div>
                <div class="col-auto">
                    <input type="submit" class="btn btn-outline-warning" value="Update">
                </div>
            </div>
        </form>
    </div>
@endsection