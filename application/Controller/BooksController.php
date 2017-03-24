<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 2/27/2017
 * Time: 2:02 PM
 */

namespace Mini\Controller;

use Mini\Model\Books;
class BooksController
{
    public function index()
    {
        // Instance new Model (Song)
        $book = new Books();
        // getting all songs and amount of songs
        $books = $book->getAllBooks();

        $amount_of_Books = $book->getAmountOfBooks();

        // load views. within the views we can echo out $songs and $amount_of_songs easily
        require APP . 'view/_templates/header.php';
        require APP . 'view/books/index.php';
        require APP . 'view/_templates/footer.php';
    }
    public function deleteBook($book_id)
    {
        // if we have an id of a song that should be deleted
        if (isset($book_id)) {
            // Instance new Model (Song)
            $book = new Books();
            // do deleteSong() in model/model.php
            $book->deleteBook($book_id);
        }

        // where to go after song has been deleted
        header('location: ' . URL . 'book/index');
    }
    public function editBook($book_id)
    {
        // if we have an id of a song that should be edited
        if (isset($book_id)) {
            // Instance new Model (Song)
            $Book = new Books();
            // do getSong() in model/model.php
            $book = $Book->getBook($book_id);

            // in a real application we would also check if this db entry exists and therefore show the result or
            // redirect the user to an error page or similar

            // load views. within the views we can echo out $song easily
            require APP . 'view/_templates/header.php';
            require APP . 'view/books/edit.php';
            require APP . 'view/_templates/footer.php';
        } else {
            // redirect user to songs index page (as we don't have a song_id)
            header('location: ' . URL . 'books/index');
        }
    }
    public function updateBook()
    {
        // if we have POST data to create a new song entry
        if (isset($_POST["submit_update_book"])) {
            // Instance new Model (Song)
            $Book = new Books();
            // do updateSong() from model/model.php
            $Book->updateBook($_POST["bookname"], $_POST["version"],  $_POST["releaseDate"], $_POST['book_id']);
        }

        // where to go after song has been added
        header('location: ' . URL . 'books/index');
    }


}