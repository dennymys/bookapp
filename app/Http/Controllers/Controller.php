<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Models\Book;

class Controller extends BaseController
{
    //
    public function index()
    {
    return Book::all();
    }

    public function show($id)
    {

        try{
        $book = book::findOrFail($id);

        if($book){
            return $book;
        }
    }
        catch (\Throwable $th){
            return response(
                ['message' => 'Book not found'], 404
            );
        }


    }
}


