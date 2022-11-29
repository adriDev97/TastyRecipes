<form action="{{ route('difficulties.store') }}" method="POST">
    @csrf
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="difficuly" class="col-form-label">Add a difficuly</label>
        </div>
        <div class="col-auto">
            <input type="text" id="difficuly" class="form-control" name="difficuly">
        </div>
        <div class="col-auto">
            <input type="submit" class="btn btn-outline-warning" value="Add">
        </div>
    </div>
</form>