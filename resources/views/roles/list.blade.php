<div class="container-sm">
    <table>
        @foreach ($roles as $role)
            <tr>
                <td class="p-2">{{ $role->role }}</td>
                <td class="p-2"><a class="btn btn-outline-warning" href="{{ route('roles.edit', $role) }}">Edit</a></td>
                <td class="p-2"><form action="{{route('roles.destroy', $role)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-warning p-2 flex-fill">Delete</button>
                </form></td>
            </tr>
        @endforeach
    </table>             
</div>