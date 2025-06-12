<?php
class BookModel extends BaseModel
{
    public function getAll()
    {
        $sql = "SELECT 
                    b.id, 
                    b.title, 
                    b.cover_image, 
                    b.publisher, 
                    a.name 
                FROM 
                    `books` AS b
                INNER JOIN 
                    `author` AS a ON b.`author_id` = a.`id`";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function deleteBook($id)
    {
        $sql = "DELETE FROM books WHERE `books`.`id` = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
    public function addBookProcess($title, $cover_image, $author, $publisher)
    {
        $sql = "INSERT INTO `books` (`title`, `cover_image`, `author_id`, `publisher`) VALUES (:title, :cover_image, :author_id, :publisher)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':cover_image', $cover_image);
        $stmt->bindParam(':author_id', $author);
        $stmt->bindParam(':publisher', $publisher);
        $stmt->execute();
    }
    public function getAuthors()
    {
        $sql = "SELECT * FROM author";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getBookById($id)
    {
        $sql = "SELECT 
                    b.id, 
                    b.title, 
                    b.cover_image, 
                    b.publisher,
                    b.author_id,
                    a.name
                FROM 
                    `books` AS b
                INNER JOIN 
                    `author` AS a ON b.`author_id` = a.`id` 
                WHERE 
                    b.`id` = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function editBookProcess($id, $title, $cover_image, $author, $publisher)
    {
        $sql = "UPDATE `books` SET `title` = :title, `cover_image` = :cover_image, `author_id` = :author_id, `publisher` = :publisher WHERE `id` = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':cover_image', $cover_image);
        $stmt->bindParam(':author_id', $author);
        $stmt->bindParam(':publisher', $publisher);
        $stmt->execute();
    }
}
