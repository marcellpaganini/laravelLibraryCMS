<div class="card mb-3">
  @if (session('success'))
          <div class="alert alert-success center-text">{{ session('success') }}</div>
  @endif
  <img src="https://images.freeimages.com/images/large-previews/5f8/book-1528240.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Books</h5>
    <p class="card-text">All book information in the system</p>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col" class="text-center">Id</th>
            <th scope="col" class="text-center">Title</th>
            <th scope="col" class="text-center">Author</th>
            <th scope="col" class="text-center">ISBN</th>
            <th scope="col" class="text-center">Management</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
            <td>{{ $book->id }}</td>
            <td>{{ $book->title }}</td>
            <td>{{ $book->author }}</td>
            <td>{{ $book->ISBN }}</td>
            <td>
                <a href="{{ url('/show/' .$book->id) }}" class="btn btn-sm btn-info">Show</a>
                <a href="{{ url('/edit/' .$book->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <a href="{{ url('/delete/' .$book->id) }}" class="btn btn-sm btn-danger">Delete</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
   
   
   
   
