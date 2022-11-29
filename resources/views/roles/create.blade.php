<form action="{{ route('roles.store') }}" method="POST">
    @csrf
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="role" class="col-form-label">Add a role</label>
        </div>
        <div class="col-auto">
            <input type="text" id="role" class="form-control" name="role">
        </div>
        <div class="col-auto">
            <input type="submit" class="btn btn-outline-warning" value="Add">
        </div>
        <div class="col-auto">
            <a href="{{ url('admin/roleUser') }}" class="btn btn-outline-warning">Assing Role</a>
        </div>
    </div>
</form>