<?php
class BookController{
    public $bookModel;
    function __construct()
    {
        $this-> bookModel = new BookModel();
    }
    public function list() 
    {
        $listBooks = $this->bookModel->getAll();
        require_once PATH_VIEW . 'list.php';
    }
    public function deleteBook() 
    {
        $id = $_GET['id'];
        $this->bookModel->deleteBook($id);
        header("location:" . BASE_URL);
    }
    public function addBook() 
    {
        $authors = $this->bookModel->getAuthors();
        require_once PATH_VIEW . 'add.php';
    }
    public function addBookProcess()
    {
        $title = $_POST['title'];
        $filename = $_FILES['cover_image'];
        $cover_image = upload_file('books', $filename);
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $this->bookModel->addBookProcess($title, $cover_image, $author, $publisher);
        header("location:" . BASE_URL);
    }
    public function editBook()
    {
        $id = $_GET['id'];
        $editBook = $this->bookModel->getBookById($id);
        $authors = $this->bookModel->getAuthors();
        require_once PATH_VIEW . 'edit.php';
    }
    public function editBookProcess(){
        $id = $_GET['id'];
        $title = $_POST['title'];
        $filename = $_FILES['cover_image'];
        $cover_image = upload_file('books', $filename);
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $this->bookModel->editBookProcess($id, $title, $cover_image, $author, $publisher);
        header("location:" . BASE_URL);
    }
}