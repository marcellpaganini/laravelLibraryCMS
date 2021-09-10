<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{    
    /**
     * notFoundMessage
     *
     * @return void
     */
    private function notFoundMessage()
    {
        return [
            'code' => 404,
            'message' => 'Note not found',
            'success' => false,
        ];
    }
    
    /**
     * successfulMessage
     *
     * @param  mixed $code
     * @param  mixed $message
     * @param  mixed $status
     * @param  mixed $count
     * @param  mixed $payload
     * @return void
     */
    private function successfulMessage($code, $message, $status, $count, $payload)
    {
        return [
            'code' => $code,
            'message' => $message,
            'success' => $status,
            'count' => $count,
            'data' => $payload,
        ];
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('book',['books'=>$books,'layout'=>'index']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::all();
        return view('book',['books'=>$books, 'layout'=>'create']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->ISBN = $request->input('ISBN');
        $book->save();
        return redirect('/')->with('success', 'Book inserted into database');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Book::find($id);
        $books = Book::all();
        return view('book',['books'=>$books, 'book'=>$book, 'layout'=>'show']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        $books = Book::all();
        return view('book',['books'=>$books, 'book'=>$book, 'layout'=>'edit']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->ISBN = $request->input('ISBN');
        $book->save();
        return redirect('/')->with('success', 'Book updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $book = Book::find($id);
    //     $student->delete();
    //     return redirect('/');
    // }

    public function permanentDelete($id)
    {
        $book = Book::destroy($id);
        if ($book) {
            $response = $this->successfulMessage(200, 'Successfully deleted', true, 0, $book);
        } else {
            $response = $this->notFoundMessage();
        }
        return redirect('/')->with('success', 'Book permanently deleted.');
    }
}
