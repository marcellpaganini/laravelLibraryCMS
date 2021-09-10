<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <title>Library App</title>
  </head>
  <body>
    @include("navbar")
    
    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Book Management System</h1>
        </div>
    </div>


    @if($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="container-fluid mt-4">
                <div class="row justify-content-center">
                    <section class="col-md-7">
                        @include("bookslist")
                    </section>
                </div>
            </div>
        </div>    
    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include("bookslist")
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="https://cdn.pixabay.com/photo/2015/07/31/11/45/library-869061_960_720.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Enter book information</h5>
                            <form action="{{ url('/store') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Enter book title">
                                </div>
                                <div class="form-group">
                                    <label>Author</label>
                                    <input type="text" name="author" class="form-control" placeholder="Enter book author">
                                </div>
                                <div class="form-group">
                                    <label>ISBN</label>
                                    <input type="number" name="ISBN" class="form-control" placeholder="Enter ISBN">
                                </div>
                                <input type="submit" class="btn btn-info" value="Save">
                                <input type="submit" class="btn btn-warning" value="Reset">
                            </form>
                        </div>
                        </div>    
                </section>
            </div>
        </div>
    @elseif($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include("bookslist")
                </section>
                <section class="col-md-5">
                    <form action="{{ url('/update/' .$book->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Title:</label>&ensp;
                            <label>{{ $book->title }}</label>
                        </div>
                        <div class="form-group">
                            <label>Author:</label>&ensp;
                            <label>{{ $book->author }}</label>
                        </div>
                        <div class="form-group">
                            <label>ISBN:</label>&ensp;
                            <label>{{ $book->ISBN }}</label>
                        </div>
                        <input type="submit" class="btn btn-info" value="Update">
                        <input type="submit" class="btn btn-warning" value="Reset">
                    </form>    
                </section>
            </div>
        </div>
    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col">
                    @include("bookslist")
                </section>
                <section class="col-md-5">
                    <form action="{{ url('/update/' .$book->id) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" value="{{ $book->title }}" name="title" class="form-control" placeholder="Enter book title">
                        </div>
                        <div class="form-group">
                            <label>Author</label>
                            <input type="text" value="{{ $book->author }}" name="author" class="form-control" placeholder="Enter book author">
                        </div>
                        <div class="form-group">
                            <label>ISBN</label>
                            <input type="number" value="{{ $book->ISBN }}" name="ISBN" class="form-control" placeholder="Enter ISBN">
                        </div>
                        <input type="submit" class="btn btn-info" value="Update">
                        <input type="submit" class="btn btn-warning" value="Reset">
                    </form>    
                </section>
            </div>
        </div>
    @endif

    <footer></footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>