<?php

namespace Application\Controllers\User\Update;

require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\lib\database.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\model\user.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\User\UserRepository;

class UpdateUser
{
    public function executegetuser(string $id){
         // Otherwise, it displays the form.
         $userRepository = new UserRepository();
         $userRepository->connection = new DatabaseConnection();
         $user = $userRepository->getUser($id);
         if ($user === null) {
             throw new \Exception("User $id n'existe pas.");
         }
 
         require('templates/back/update_user.php');
    }

    public function execute(string $id, ?array $input)
    {
        // It handles the form submission when there is an input.
        if ($input !== null) {
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
            $success = $userRepository->updateUser( $name,$prenom, $username, $email, $password, $role_id , $id );
            if (!$success) {
                throw new \Exception('Impossible de modifier le user !');
            } else {
                header('Location: index.php?action=users');
            }
        }

       
    }
}
