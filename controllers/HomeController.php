<?php

class HomeController
{
    public $bookModel;
    public $authorModel;
    function __construct()
    {
        $this-> bookModel = new BookModel();
        $this-> authorModel = new AuthorModel();
    }
    public function index() 
    {
        require_once PATH_VIEW . 'home.php';
    }
    public function bookList() 
    {
        $listBooks = $this->bookModel->getAll();
        require_once PATH_VIEW . 'book.php';
    }
    
}