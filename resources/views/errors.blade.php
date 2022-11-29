@if($errors->any())
    <div class="alert text-danger mt-0">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif