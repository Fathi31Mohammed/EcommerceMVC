<?php

namespace Application\Controllers\categorie\Update;

require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\lib\database.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\model\categories.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\categorie\categorieRepository;

class Updatecategorie
{
    public function executegetcategorie(string $id){
        // Otherwise, it displays the form.
        $categorieRepository = new categorieRepository();
        $categorieRepository->connection = new DatabaseConnection();
        $categorie = $categorieRepository->getcategorie($id);
        if ($categorie === null) {
            throw new \Exception("categorie $id n'existe pas.");
        }

        require('templates/back/update_categorie.php');
    }

    public function execute(string $id, ?array $input)
    {
        $name = null;
        $description=null;
        // It handles the form submission when there is an input.
        if ($input !== null) {
            $name = null;
			$description = null;
            if (!empty($input['name']) && 
                !empty($input['description'])){
                    $name = $input['name'];
                    $description = $input['description'];
            } else {
                throw new \Exception('Les données du formulaire sont invalides.');
            }

            $categorieRepository = new categorieRepository();
            $categorieRepository->connection = new DatabaseConnection();
            $success = $categorieRepository->updatecategories($name,$description,$id);
            if (!$success) {
                throw new \Exception('Impossible de modifier la categorie !');
            } else {
                header('Location: index.php?action=categorie');
            }
        }
    }
}
