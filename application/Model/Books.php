<?php
/**
 * Created by PhpStorm.
 * User: micha
 * Date: 2/27/2017
 * Time: 2:03 PM
 */

namespace Mini\Model;
use Mini\Core\Model;


class Books extends Model
{

    public function getAllBooks()
    {
        $sql = "SELECT id,bookname,version,releaseDate FROM book";
        $query = $this->db->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    public function getAmountOfBooks()
    {
        $sql = "SELECT COUNT(id) AS amount_of_Books FROM book";
        $query = $this->db->prepare($sql);
        $query->execute();

        // fetch() is the PDO method that get exactly one result
        return $query->fetch()->amount_of_Books;
    }
    public function deleteBook($book_id)
    {
        $sql = "DELETE FROM book WHERE id = :book_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':book_id' => $book_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }
    public function updateBook($bookname, $version, $releaseDate, $book_id)
    {
        $sql = "UPDATE book SET bookname = :bookname, version = :version, releaseDate = :releaseDate WHERE id = :book_id";
        $query = $this->db->prepare($sql);
        $parameters = array(':bookname' => $bookname, ':version' => $version, ':releaseDate' => $releaseDate, ':$book_id' => $book_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);
    }
    public function getBook($book_id)
    {
        $sql = "SELECT id, bookname, version, releaseDate FROM book WHERE id = :book_id LIMIT 1";
        $query = $this->db->prepare($sql);
        $parameters = array(':book_id' => $book_id);

        // useful for debugging: you can see the SQL behind above construction by using:
        // echo '[ PDO DEBUG ]: ' . Helper::debugPDO($sql, $parameters);  exit();

        $query->execute($parameters);

        // fetch() is the PDO method that get exactly one result
        return $query->fetch();
    }
}