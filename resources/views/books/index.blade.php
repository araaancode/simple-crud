<h1>Books</h1>

@if ($message = Session::get('success'))
<div style="background-color: green;color:white;">
    <p>{{ $message }}</p>
</div>
@endif


<table class="table table-bordered">
    <tr>
        <th>id</th>
        <th>Title</th>
        <th>Author</th>
        <th width="280px">description</th>
    </tr>
    @foreach ($books as $book)
    <tr>
        <td>{{ $book->id }}</td>
        <td>{{ $book->title }}</td>
        <td>{{ $book->author }}</td>
        <td>{{ $book->description }}</td>
        <td>
            <form action="{{ route('books.destroy',$book->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('books.show',$book->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('books.edit',$book->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

<a href="/books/create">Create New Book</a>