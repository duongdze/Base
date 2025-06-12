<?php
class AuthorModel extends BaseModel{
    public function getAllAuthors() {
        $sql = "SELECT * FROM author";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}