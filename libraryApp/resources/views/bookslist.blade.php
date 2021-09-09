<div class="card mb-3">
  <img src="https://cdn.pixabay.com/photo/2015/06/02/12/59/book-794978_960_720.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Books</h5>
    <p class="card-text">All book information in the system</p>
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">Title</th>
            <th scope="col">Author</th>
            <th scope="col">ISBN</th>
            <th scope="col">Operations</th>
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
                <a href="#" class="btn btn-sm btn-info">Show</a>
                <a href="{{ url('/edit/' .$book->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <a href="" class="btn btn-sm btn-danger">Delete</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
  </div>
</div>
   
   
   
   
