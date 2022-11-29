<div class="container-sm">
    <table>
        @foreach ($categories as $category)
            <tr>
                <td class="p-2">{{ $category->name }}</td>
                <td class="p-2"><a class="btn btn-outline-warning" href="{{ route('categories.edit', $category) }}">Edit</a></td>
                <td class="p-2"><form action="{{route('categories.destroy', $category)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-warning p-2 flex-fill">Delete</button>
                </form></td>
            </tr>
        @endforeach
    </table>             
</div>