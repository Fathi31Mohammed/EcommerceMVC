<?php

namespace Application\Model\categorie;

require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\lib\database.php');

use Application\Lib\Database\DatabaseConnection;

class categorie
{
    public string $id;
    public string $name;
    public string $description;
}

class categorieRepository
{
    public DatabaseConnection $connection;

    public function getcategories(): array
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT id, name , description FROM categories ORDER BY name ASC"
        );
        $statement->execute();

        $categories = [];
        while (($row = $statement->fetch())) {
            $categorie = new categorie();
            $categorie->id = $row['id'];
            $categorie->name = $row['name'];
            $categorie->description = $row['description'];
            $categories[] = $categorie;
        }

        return $categories;
    }

    public function getcategorie(string $id): ?categorie
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT id, name , description FROM categories WHERE id = ?"
        );
        $statement->execute([$id]);

        $row = $statement->fetch();
        if ($row === false) {
            return null;
        }

        $categorie = new categorie();
        $categorie->id = $row['id'];
		$categorie->name = $row['name'];
        $categorie->description = $row['description'];


        return $categorie;
    }

    public function createcategories(int $id,string $name,string $description): bool
    {
        $statement = $this->connection->getConnection()->prepare(
            'INSERT INTO categories ( id,name,description) VALUES(?,?,?)'
        );
        $affectedLines = $statement->execute([$id,$name,$description]);

        return ($affectedLines > 0);
    }

    public function updatecategories( string $name,string $description,string $id,): bool
    {
        $statement = $this->connection->getConnection()->prepare(
            'UPDATE categories SET name = ?, description = ? WHERE id = ?'
        );
        $affectedLines = $statement->execute([$name,$description,$id]);

        return ($affectedLines > 0);
    }

    public function deleteCategorie(string $id): bool
    {
        $statement = $this->connection->getConnection()->prepare(
            'DELETE FROM categories WHERE id = ?'
        );
        $affectedLines = $statement->execute([$id]);

        return ($affectedLines > 0);
    }
}
