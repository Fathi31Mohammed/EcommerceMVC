<?php

namespace Application\Model\produit;

require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\lib\database.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\model\categories.php');


use Application\Lib\Database\DatabaseConnection;
USE Application\Model\categorie\categorieRepository;

class produit
{
    public int $id;
    public string $name;
    public string $shortdescription;
    public string $description;
    public string $price;
    public string $nameC ;
    public string $image;
        
}

class produitRepository
{
    public DatabaseConnection $connection;

    public function getproduits(): array
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT P.id, P.name, P.shortdescription, P.description , P.price ,C.name as nameC, P.image  FROM products P JOIN categories C on P.category_id=C.id ORDER BY name ASC"
        );
        $statement->execute();

        $produits = [];
        while (($row = $statement->fetch())) {
            $produit = new produit();
            $produit->id = $row['id'];
            $produit->name = $row['name'];
            $produit->shortdescription = $row['shortdescription'];
            $produit->description = $row['description'];
            $produit->price = $row['price'];
            $produit->nameC  = $row['nameC'];
            $produit->image  = $row['image'];
            $produits[] = $produit;
        }

        return $produits;
    }

    public function getproduit(string $id): ?produit
    {
        $statement = $this->connection->getConnection()->prepare(
            "SELECT id, name, shortdescription, description , price , category_id,image  FROM products WHERE id = ?"
        );
        $statement->execute([$id]);

        $row = $statement->fetch();
        if ($row === false) {
            return null;
        }

        $produit = new produit();
        $produit->id = $row['id'];
		$produit->name = $row['name'];
		$produit->shortdescription = $row['shortdescription'];
		$produit->description = $row['description'];
        $produit->price = $row['price'];
		$produit->category_id  = $row['category_id'];
        $produit->image  = $row['image'];

        return $produit;
    }

    public function createproduit(string $id,string $name, string $shortdescription, string $description, float $price, int $category_id,string $image ): bool
    {
        $statement = $this->connection->getConnection()->prepare(
            'INSERT INTO products (id,name, shortdescription, description, price, category_id,image ) VALUES(?, ?, ?, ?, ?, ?,?)'
        );
        $affectedLines = $statement->execute([$id, $name, $shortdescription, $description, $price, $category_id,$image ]);

        return ($affectedLines > 0);
    }

    public function updateProduit(string $name, string $shortdescription, string $description, float $price, int $category_id ,string $image, string $id): bool
    {
        $statement = $this->connection->getConnection()->prepare(
            'UPDATE products SET name = ?, shortdescription = ?, description = ?, price = ?, category_id  = ?,image=? WHERE id = ?'
        );
        $affectedLines = $statement->execute([$name, $shortdescription, $description, $price, $category_id, $image , $id]);

        return ($affectedLines > 0);
    }

    
    public function deleteProduit(string $id): bool
    {
        $statement = $this->connection->getConnection()->prepare(
            'DELETE FROM products WHERE id = ?'
        );
        $affectedLines = $statement->execute([$id]);

        return ($affectedLines > 0);
    }

    public function updateProduitsansimage(string $name, string $shortdescription, string $description, float $price, int $category_id , string $id): bool
    {
        $statement = $this->connection->getConnection()->prepare(
            'UPDATE products SET name = ?, shortdescription = ?, description = ?, price = ?, category_id  = ? WHERE id = ?'
        );
        $affectedLines = $statement->execute([$name, $shortdescription, $description, $price, $category_id, $id]);

        return ($affectedLines > 0);}
}
