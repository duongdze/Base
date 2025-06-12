<?php
class AuthorModel extends BaseModel{
    public function getAllAuthors() {
        $sql = "SELECT * FROM author";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addAuthorProcess($name) {
        // Add your database logic here to insert a new author
        // Example using PDO:
        $stmt = $this->pdo->prepare("INSERT INTO authors (name) VALUES (:name)");
        $stmt->bindParam(':name', $name);
        $stmt->execute();
    }
}