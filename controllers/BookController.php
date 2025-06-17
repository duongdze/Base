<?php
class BookController{
    public $bookModel;
    public $authorModel;
    function __construct()
    {
        $this-> bookModel = new BookModel();
        $this-> authorModel = new AuthorModel();
    }
    //hiển thị danh sách sách
    public function list() 
    {
        $listBooks = $this->bookModel->getAll();
        require_once PATH_VIEW . 'admin/list.php';
    }
    //xóa sách
    public function deleteBook() 
    {
        $id = $_GET['id'];
        $this->bookModel->deleteBook($id);
        header("location:" . BASE_URL . "?action=adminList");
    }
    //thêm sách
    public function addBook() 
    {
        $listAuthors = $this->authorModel->getAllAuthors();
        require_once PATH_VIEW . 'admin/add.php';
    }
    //xử lý thêm sách
    public function addBookProcess()
    {
        $title = $_POST['title'];
        $filename = $_FILES['cover_image'];
        $cover_image = upload_file('books', $filename);
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $this->bookModel->addBookProcess($title, $cover_image, $author, $publisher);
        header("location:" . BASE_URL . "?action=adminList");
    }
    //thêm tác giả
    public function addAuthor()
    {
        require_once PATH_VIEW . 'admin/addAuthor.php';
    }
    //xử lý thêm tác giả
    public function addAuthorProcess()
    {
        $name = $_POST['name'];
        $this->authorModel->addAuthorProcess($name);
        header("location:" . BASE_URL . "?action=adminList");
    }
    //sửa sách
    public function editBook()
    {
        $id = $_GET['id'];
        $editBook = $this->bookModel->getBookById($id);
        $authors = $this->bookModel->getAuthors();
        require_once PATH_VIEW . 'admin/edit.php';
    }
    //xử lý sửa sách
    public function editBookProcess(){
        $id = $_GET['id'];
        $title = $_POST['title'];
        $filename = $_FILES['cover_image'];
        $cover_image = upload_file('books', $filename);
        $author = $_POST['author'];
        $publisher = $_POST['publisher'];
        $this->bookModel->editBookProcess($id, $title, $cover_image, $author, $publisher);
        header("location:" . BASE_URL . "?action=adminList");
    }
    
}