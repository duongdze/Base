<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'         => (new HomeController)->bookList(),

    // Admin book
    'deleteBook' => (new BookController)->deleteBook(),
    'addBook'   => (new BookController)->addBook(),
    'addBookProcess' => (new BookController)->addBookProcess(),
    'editBook'  => (new BookController)->editBook(),
    'editBookProcess' => (new BookController)->editBookProcess(),
    'addAuthor' => (new BookController)->addAuthor(),
    'addAuthorProcess' => (new BookController)->addAuthorProcess(),
    'adminList' => (new BookController)->list(),

    // User
    'login' => (new UserController)->login(),
    'logout' => (new UserController)->logout(),
    'loginProcess' => (new UserController)->loginProcess(),
};
