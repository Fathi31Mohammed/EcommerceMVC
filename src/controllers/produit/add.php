<?php

namespace Application\Controllers\produit\Add;

require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\lib\database.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\model\produit.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\produit\produitRepository;


class Addproduit
{
    public function execute(array $input)
    {
        $id = null;
        $name = null;
        $shortdescription = null;
        $description = null;
        $price = null;
        $category_id = null;
        $image=null;
        if (!empty($input['id']) && 
			!empty($input['name']) && 
			!empty($input['shortdescription']) &&
            !empty($input['description']) &&
			!empty($input['price']) &&
			!empty($input['category_id'])&&
            !empty($input['image'])) {
            $id = $input['id'];
            $name = $input['name'];
            $shortdescription = $input['shortdescription'];
            $description = $input['description'];
            $price = $input['price'];
            $category_id = $input['category_id'];
            $image = $input['image'];
        } else {
            throw new \Exception('Les données du formulaire sont invalides.');
        }

        $produitRepository = new produitRepository();
        $produitRepository->connection = new DatabaseConnection();
        $success = $produitRepository->createproduit( $id , $name , $shortdescription , $description , $price, $category_id,$image);
        if (!$success) {
            throw new \Exception('Impossible d\'ajouter le produit !');
        } else {
            header('Location: index.php?action=produit');
        }
    }
}
