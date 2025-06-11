<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    '/'         => (new BookController)->list(),
    'deleteBook' => (new BookController)->deleteBook(),
    'addBook'   => (new BookController)->addBook(),
    'addBookProcess' => (new BookController)->addBookProcess(),
    'editBook'  => (new BookController)->editBook(),
    'editBookProcess' => (new BookController)->editBookProcess(),
};