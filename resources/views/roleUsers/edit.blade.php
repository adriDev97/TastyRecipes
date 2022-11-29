@extends('layouts.app')
@section('content')
    <div class="container margin">
    @include('errors')
        <form action="{{ route('roleUsers.update', $roleUser) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row g-3 align-items-center">
            <div class="col-md-6 my-3">
                <label for="role_id" class="form-label">Actual Role {{ $roleUser->role }} </label>
                <select id="role_id" class="form-select" name="role_id">
                    <option selected disabled>Choose...</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->role }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 my-3">
                <label for="user_id" class="form-label">User : {{ $roleUser->name }} {{ $roleUser->email }}</label>
                <select id="user_id" class="form-select" name="user_id">
                    <option selected disabled>Choose...</option>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->id }} - {{ $user->name }} - {{ $user->email }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-auto">
                <input type="submit" class="btn btn-outline-warning" value="Assing role">
            </div>
        </div>
        </form>
    </div>
@endsection