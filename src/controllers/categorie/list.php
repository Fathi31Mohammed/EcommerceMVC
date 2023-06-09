<?php

namespace Application\Controllers\categorie;

require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\lib\database.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\model\categories.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\categorie\categorieRepository;

class categorie
{
    public function execute()
    {
        $connection = new DatabaseConnection();

        $categorieRepository = new categorieRepository();
        $categorieRepository->connection = $connection;
        $categories = $categorieRepository->getcategories();

        require('C:\xampp\htdocs\Nouveaudossier\ecommerce\templates\back\categorie.php');
    }

    public function deleteCt(string $id)
    {
        $connection = new DatabaseConnection();

        $categorieRepository = new categorieRepository();
        $categorieRepository->connection = $connection;
        $categories = $categorieRepository->deleteCategorie($id);
        $categories = $categorieRepository->getcategories($id);
        require('C:\xampp\htdocs\Nouveaudossier\ecommerce\templates\back\categorie.php');
        
    }
}
