<?php

namespace Application\Controllers\categorie\Add;

require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\lib\database.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\model\categories.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\categorie\categorieRepository;

class AddCategories
{
    public function execute(array $input)
    {
        $id= null;
        $name = null;
       
        if (!empty($input['id']) && 
            !empty($input['name']) &&
            !empty($input['description'])  
			) {
                $id = $input['id'];
                $name = $input['name'];
                $description = $input['description'];
        } else {
            throw new \Exception('Les données du formulaire sont invalides.');
        }

        $categorieRepository = new categorieRepository();
        $categorieRepository->connection = new DatabaseConnection();
        $success = $categorieRepository->createcategories($id,$name,$description);
        if (!$success) {
            throw new \Exception('Impossible d\'ajouter le categorie !');
        } else {
            header('Location: index.php?action=categorie');
        }
    }
}

