<div class="container-sm">
    <table>
        @foreach ($difficulties as $difficulty)
            <tr>
                <td class="p-2">{{ $difficulty->difficulty }}</td>
                <td class="p-2"><a class="btn btn-outline-warning" href="{{ route('difficulties.edit', $difficulty) }}">Edit</a></td>
                <td class="p-2"><form action="{{route('difficulties.destroy', $difficulty)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-warning p-2 flex-fill">Delete</button>
                </form></td>
            </tr>
        @endforeach
    </table>             
</div>