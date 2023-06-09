<?php

namespace Application\Controllers\produit\Update;

require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\lib\database.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\model\produit.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\produit\produitRepository;

class UpdateProduit
{
    public function executegetproduit(string $id){
                // Otherwise, it displays the form.
                $produitRepository = new produitRepository();
                $produitRepository->connection = new DatabaseConnection();
                $produit = $produitRepository->getproduit($id);
                if ($produit === null) {
                    throw new \Exception("produit $id n'existe pas.");
                }
        
                require('templates/back/update_produit.php');
    }


    public function execute(string $id, ?array $input)
    {
        // It handles the form submission when there is an input.
        if ($input !== null) {
            $name = null;
			$shortdescription = null;
			$description = null;
			$price = null;
			$category_id  = null;
            if (!empty($input['name']) && 
				!empty($input['shortdescription']) && 
				!empty($input['description']) &&
				!empty($input['price']) &&
				!empty($input['category_id'])&&
                !empty($input['image'])) {
				$name = $input['name'];
				$shortdescription = $input['shortdescription'];
				$description = $input['description'];
				$price = $input['price'];
				$category_id  = $input['category_id'];
                $image=$input['image'];
            } else {
                throw new \Exception('Les données du formulaire sont invalides.');
            }

            $produitRepository = new produitRepository();
            $produitRepository->connection = new DatabaseConnection();
            $success = $produitRepository->updateProduit( $name, $shortdescription, $description, $price, $category_id ,$image, $id );
            if (!$success) {
                throw new \Exception('Impossible de modifier le produit !');
            } else {
                header('Location: index.php?action=produit');
            }
        }


    }

    public function executesansimage(string $id, ?array $input)
    {
        // It handles the form submission when there is an input.
        if ($input !== null) {
            $name = null;
			$shortdescription = null;
			$description = null;
			$price = null;
			$category_id  = null;
            if (!empty($input['name']) && 
				!empty($input['shortdescription']) && 
				!empty($input['description']) &&
				!empty($input['price']) &&
				!empty($input['category_id'])
                ) {
				$name = $input['name'];
				$shortdescription = $input['shortdescription'];
				$description = $input['description'];
				$price = $input['price'];
				$category_id  = $input['category_id'];
                
            } else {
                throw new \Exception('Les données du formulaire sont invalides.');
            }

            $produitRepository = new produitRepository();
            $produitRepository->connection = new DatabaseConnection();
            $success = $produitRepository->updateProduitsansimage( $name, $shortdescription, $description, $price, $category_id , $id );
            if (!$success) {
                throw new \Exception('Impossible de modifier le produit !');
            } else {
                header('Location: index.php?action=produit');
            }
        }


    }
}
