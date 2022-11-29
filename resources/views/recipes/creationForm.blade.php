<div class="col-md-6">
    @include('errors')
</div>
    <form class="row g-3" action="{{ route('recipes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label for="name" class="form-label">Recipe Name</label>
            <input type="text" class="form-control" id="name" value="" name="name" maxlength="26" required>
            <small class="text-muted">max 26 characters</small>
        </div>
        <div class="col-md-2">
            <label for="prep_time" class="form-label">Prep time</label>
            <input type="number" class="form-control" id="prep_time" name="prep_time" required>
        </div>
        <div class="col-md-2">
            <label for="cook_time" class="form-label">Cook time</label>
            <input type="number" class="form-control" id="cook_time" name="cook_time" required>
        </div>
        <div class="col-md-2">
            <label for="serving" class="form-label">Serving</label>
            <input type="text" class="form-control" id="serving" name="serving" required>
        </div>
        <div class="col-md-5">
            <label for="ingredients" class="form-label">Ingredients - <small class="text-muted">min 4 ingredients</small></label>
            <input type="text" class="form-control my-2" id="ingredients" name="ingredient1" maxlength="90" required>
            <input type="text" class="form-control my-2" name="ingredient2" maxlength="90" required>
            <input type="text" class="form-control my-2" name="ingredient3" maxlength="90" required>
            <input type="text" class="form-control my-2" name="ingredient4" maxlength="90" required>
            <input type="text" class="form-control my-2" name="ingredient5" maxlength="90">
            <input type="text" class="form-control my-2" name="ingredient6" maxlength="90">
            <input type="text" class="form-control my-2" name="ingredient7" maxlength="90">
            <input type="text" class="form-control my-2" name="ingredient8" maxlength="90">
            <input type="text" class="form-control my-2" name="ingredient9" maxlength="90">
            <input type="text" class="form-control my-2" name="ingredient10" maxlength="90">
            <input type="text" class="form-control my-2" name="ingredient11" maxlength="90">
            <input type="text" class="form-control my-2" name="ingredient12" maxlength="90">
            <input type="text" class="form-control my-2" name="ingredient13" maxlength="90">
            <input type="text" class="form-control my-2" name="ingredient14" maxlength="90">
            <input type="text" class="form-control my-2" name="ingredient15" maxlength="90">
            <input type="text" class="form-control my-2" name="ingredient16" maxlength="90">
            <input type="text" class="form-control my-2" name="ingredient17" maxlength="90">
            <input type="text" class="form-control my-2" name="ingredient18" maxlength="90">
            <input type="text" class="form-control my-2" name="ingredient19" maxlength="90">
            <input type="text" class="form-control my-2" name="ingredient20" maxlength="90">
        </div>
        <div class="col-md-7">
            <label for="floatingTextarea">Preparation</label>
            <textarea class="form-control my-3" id="floatingTextarea" cols="30" rows="10" name="preparation" required></textarea>
            <div class="col-md-12 my-1">
                <label for="tip" class="form-label">Tip</label>
                <textarea class="form-control my-3" id="tip" cols="30" rows="3" name="tip" maxlength="190"></textarea>
            </div>
            <div class="col-md-12 my-1">
                <label for="note" class="form-label">Note</label>
                <textarea class="form-control my-3" id="note" cols="30" rows="2" name="note" maxlength="150"></textarea>
            </div>
            <div class="col-md-6 my-3">
                <label for="difficulty_id" class="form-label">Difficulty</label>
                <select id="difficulty_id" class="form-select" name="difficulty_id" required>
                    <option selected disabled>Choose...</option>
                    @foreach ($difficulties as $difficulty)
                        <option value="{{ $difficulty->id }}">{{ $difficulty->difficulty }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-6 my-3">
                <label for="category_id" class="form-label">Category food</label>
                <select id="category_id" class="form-select" name="category_id" required>
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
