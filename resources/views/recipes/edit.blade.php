@extends('layouts.app')
@section('content')
<div class="container margin">
    <h1 class="mb-5">Edit your Recipe</h1>
    @include('errors')
    <form class="row g-3" action="{{ route('recipes.update', $recipe) }}" method="POST" enctype="multipart/form-data">
        @method('PUT') @csrf 
        <div class="col-md-6">
            <label for="name" class="form-label">Recipe Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $recipe->name }}">
        </div>
        <div class="col-md-2">
            <label for="prep_time" class="form-label">prep_time</label>
            <input type="number" class="form-control" id="prep_time" name="prep_time" value="{{ $recipe->prep_time }}">
        </div>
        <div class="col-md-2">
            <label for="cook_time" class="form-label">cook_time</label>
            <input type="number" class="form-control" id="cook_time" name="cook_time" value="{{ $recipe->cook_time }}">
        </div>
        <div class="col-md-2">
            <label for="serving" class="form-label">Serving</label>
            <input type="text" class="form-control" id="serving" name="serving" value="{{ $recipe->serving }}">
        </div>
        <div class="col-md-5">
            <label for="ingredients" class="form-label">ingredients</label>
            <input type="text" class="form-control my-2" id="ingredients" name="ingredient1" value="{{ $recipe->ingredient1 }}">
            <input type="text" class="form-control my-2" name="ingredient2" value="{{ $recipe->ingredient2 }}">
            <input type="text" class="form-control my-2" name="ingredient3" value="{{ $recipe->ingredient3 }}">
            <input type="text" class="form-control my-2" name="ingredient4" value="{{ $recipe->ingredient4 }}">
            <input type="text" class="form-control my-2" name="ingredient5" value="{{ $recipe->ingredient5 }}">
            <input type="text" class="form-control my-2" name="ingredient6" value="{{ $recipe->ingredient6 }}">
            <input type="text" class="form-control my-2" name="ingredient7" value="{{ $recipe->ingredient7 }}">
            <input type="text" class="form-control my-2" name="ingredient8" value="{{ $recipe->ingredient8 }}">
            <input type="text" class="form-control my-2" name="ingredient9" value="{{ $recipe->ingredient9 }}">
            <input type="text" class="form-control my-2" name="ingredient10" value="{{ $recipe->ingredient10 }}">
            <input type="text" class="form-control my-2" name="ingredient11" value="{{ $recipe->ingredient11 }}">
            <input type="text" class="form-control my-2" name="ingredient12" value="{{ $recipe->ingredient12 }}">
            <input type="text" class="form-control my-2" name="ingredient13" value="{{ $recipe->ingredient13 }}">
            <input type="text" class="form-control my-2" name="ingredient14" value="{{ $recipe->ingredient14 }}">
            <input type="text" class="form-control my-2" name="ingredient15" value="{{ $recipe->ingredient15 }}">
            <input type="text" class="form-control my-2" name="ingredient16" value="{{ $recipe->ingredient16 }}">
            <input type="text" class="form-control my-2" name="ingredient17" value="{{ $recipe->ingredient17 }}">
            <input type="text" class="form-control my-2" name="ingredient18" value="{{ $recipe->ingredient18 }}">
            <input type="text" class="form-control my-2" name="ingredient19" value="{{ $recipe->ingredient19 }}">
            <input type="text" class="form-control my-2" name="ingredient20" value="{{ $recipe->ingredient20 }}">
        </div>
        <div class="col-md-7">
            <label for="floatingTextarea">Preparation</label>
            <textarea class="form-control my-3" id="floatingTextarea" cols="30" rows="10" name="preparation" value="{{ $recipe->preparation }}"></textarea>
            <div class="col-md-12 my-1">
                <label for="tip" class="form-label">Tip</label>
                <textarea class="form-control my-3" id="tip" cols="30" rows="3" name="tip" value="{{ $recipe->tip }}"></textarea>
            </div>
            <div class="col-md-12 my-1">
                <label for="note" class="form-label">note</label>
                <textarea class="form-control my-3" id="note" cols="30" rows="2" name="note" value="{{ $recipe->note }}"></textarea>
            </div>
            <div class="col-md-6 my-3">
                <label for="difficulty_id" class="form-label">Difficulty</label>
                <select id="difficulty_id" class="form-select" name="difficulty_id">
                    <option selected disabled>Choose...</option>
                    @foreach ($difficulties as $difficulty)
                        <option value="{{ $difficulty->id }}">{{ $difficulty->difficulty }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 my-3">
                <label for="category_id" class="form-label">Category food</label>
                <select id="category_id" class="form-select" name="category_id">
                    <option selected disabled>Choose...</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 my-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="col-12 my-3">
                <button type="submit" class="btn btn-outline-warning">Post recipe</button>
            </div>
        </div>
    </form>
</div>

@endsection