<?php
class AuthorModel extends BaseModel{
    public function getAllAuthors() {
        $sql = "SELECT * FROM author";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function addAuthorProcess($name) {
        $stmt = $this->pdo->prepare("INSERT INTO author (name) VALUES (:name)");
        $stmt->bindParam(':name', $name);
        $stmt->execute();
    }
}