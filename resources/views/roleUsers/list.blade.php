<div class="container-sm">
    <table class="table table-hover">
        <thead>
            <tr><th>ROLE</th><th>USER NAME</th><th>USER EMAIL</th><th></th></tr>
        </thead>
        <tbody>
        @foreach ($roles as $role)
            @foreach ($role->users as $roleUser)
                <tr class="col-md-10">
                    <td class="pt-4">{{ $role->role }}</td>
                    <td class="pt-4">{{ $roleUser->name }}</td>
                    <td class="pt-4">{{ $roleUser->email }}</td>
                    <td>
                        <a class="btn btn-outline-warning mb-1" href="{{ route('roleUsers.edit', $roleUser) }}"><i class="fa-solid fa-pen-to-square"></i></a>
                        <form action="{{ route('roleUsers.destroy', $roleUser) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-warning"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        @endforeach
    </tbody>
    </table>
</div>
