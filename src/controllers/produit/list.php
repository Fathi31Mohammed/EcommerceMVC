<?php

namespace Application\Controllers\produit;

require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\lib\database.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\model\produit.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\model\categories.php');


use Application\Lib\Database\DatabaseConnection;
use Application\Model\produit\produitRepository;
use Application\Model\categorie\categorieRepository;


class produit
{
    public function execute()
    {
        $connection = new DatabaseConnection();

        $produitRepository = new produitRepository();
        $produitRepository->connection = $connection;
        $produits = $produitRepository->getproduits();

        require('C:\xampp\htdocs\Nouveaudossier\ecommerce\templates\back\produit.php');
    }

    public function deletePr( string $id)
    {
        $connection = new DatabaseConnection();

        $produitRepository = new produitRepository();
        $produitRepository->connection = $connection;
        $produits = $produitRepository->deleteProduit($id);
        $produits = $produitRepository->getproduits();
        require('C:\xampp\htdocs\Nouveaudossier\ecommerce\templates\back\produit.php');
       
    }
    public function selectcatego()
    {
        $connection = new DatabaseConnection();

        $categorieRepository = new categorieRepository();
        $categorieRepository->connection = $connection;
        $categories = $categorieRepository->getcategories();
        return $categories;

    }
}
