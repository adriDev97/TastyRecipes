<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="name" class="col-form-label">Category name</label>
        </div>
        <div class="col-auto">
            <input type="text" id="name" class="form-control" name="name">
        </div>
        <div class="col-auto">
            <input type="submit" class="btn btn-outline-warning" value="Add">
        </div>
    </div>
</form>