<?php

namespace Application\Controllers\User\Add;

require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\lib\database.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\model\user.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\User\UserRepository;

class AddUser
{
    public function execute(array $input)
    {
        $name = null;
        $prenom = null;
        $username = null;
        $email = null;
        $password = null;
        $role_id = null;
        if (!empty($input['name']) &&
            !empty($input['prenom']) &&  
			!empty($input['username']) && 
			!empty($input['email']) &&
			!empty($input['password']) &&
			!empty($input['role_id'])) {
            $name = $input['name'];
            $prenom = $input['prenom'];
            $username = $input['username'];
            $email = $input['email'];
            $password = $input['password'];
            $role_id = $input['role_id'];
        } else {
            throw new \Exception('Les données du formulaire sont invalides.');
        }

        $userRepository = new UserRepository();
        $userRepository->connection = new DatabaseConnection();
        $success = $userRepository->createUser($name,$prenom,$username, $email, $password, $role_id);
        if (!$success) {
            throw new \Exception('Impossible d\'ajouter le user !');
        } else {
            header('Location: index.php?action=users');
        }
    }

    public function executecliant(array $input)
    {
        $name = null;
        $prenom = null;
        $username = null;
        $email = null;
        $password = null;
        $role_id = 2;
        if (!empty($input['name']) &&
            !empty($input['prenom']) &&  
			!empty($input['username']) && 
			!empty($input['email']) &&
			!empty($input['password']) 
			// !empty($input['role_id']
            ) {
            $name = $input['name'];
            $prenom = $input['prenom'];
            $username = $input['username'];
            $email = $input['email'];
            $password = $input['password'];
            // $role_id = $input['role_id'];
        } else {
            throw new \Exception('Les données du formulaire sont invalides.');
        }

        $userRepository = new UserRepository();
        $userRepository->connection = new DatabaseConnection();
        $success = $userRepository->createUser($name,$prenom,$username, $email, $password, $role_id);
        if (!$success) {
            throw new \Exception('Impossible d\'ajouter le user !');
        } else {
            // header('Location: index.php?action=acceuil');
            header('location:templates\back\identifiant.php');
        }
    }
}
