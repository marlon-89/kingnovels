<?php

/**
 * Description of DbManager
 *
 * @author Yaroslav Lashko
 */
class DbManager {

    private $db;

    public function __construct($db) {
        $this->db = new mysqli($db['host'], $db['user'], $db['password'], $db['name']);
    }

    public function getBookById($id) {
        $query = "SELECT * FROM books WHERE id=$id LIMIT 1";
        if (!$result = $this->db->query($query)) {
            return false;
        } else {
            return $result->fetch_assoc();
        }
    }

    public function getBooks() {
        $query = 'SELECT * FROM books';
        $result = $this->db->query($query);
        if (!$result) {
            return false;
        } else {
            $books = array();
            while ($book = $result->fetch_assoc()) {
                $books[] = $book;
            }
            return $books;
        }
    }

    protected function query($query) {
        if (!$this->db->query($query)) {
            return false;
        } else {
            return true;
        }
    }

}
