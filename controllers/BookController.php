<?php
class BookController{
    public $bookModel;
    public $authorModel;
    function __construct()
    {
        $this-> bookModel = new BookModel();
        $this-> authorModel = new AuthorModel();
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
        $listAuthors = $this->authorModel->getAllAuthors();
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
    public function addAuthor()
    {
        $listAuthors = $this->authorModel->getAllAuthors();
        require_once PATH_VIEW . 'addAuthor.php';
    }
    public function addAuthorProcess()
    {
        $name = $_POST['name'];
        $this->authorModel->addAuthorProcess($name);
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