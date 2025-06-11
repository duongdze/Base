<?php
class BookModel extends BaseModel
{
    public function getAll()
    {
        $sql = "SELECT * FROM `books` INNER JOIN `author` ON `books`.`author_id` = `author`.`id`";
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
        $sql = "SELECT * FROM `books` INNER JOIN `author` ON `books`.`author_id` = `author`.`id` WHERE `books`.`id` = :id";
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
