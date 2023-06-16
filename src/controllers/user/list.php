<?php

namespace Application\Controllers\User;
session_start();
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\lib\database.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\model\user.php');

use Application\Lib\Database\DatabaseConnection;
use Application\Model\User\UserRepository;

class User
{
    public function execute()
    {
        $connection = new DatabaseConnection();

        $userRepository = new UserRepository();
        $userRepository->connection = $connection;
        $users = $userRepository->getUsers();

        require('C:\xampp\htdocs\Nouveaudossier\ecommerce\templates\back\users.php');
    }

    public function delete(string $id)
    {
        $connection = new DatabaseConnection();

        $userRepository = new UserRepository();
        $userRepository->connection = $connection;
        $users = $userRepository->deleteUser($id);
        $users = $userRepository->getUsers($id);
        require('C:\xampp\htdocs\Nouveaudossier\ecommerce\templates\back\users.php');
        
    }
    public function login()
    {  
        if (!empty($_POST['name']) || !empty($_POST['password'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
  
         if (empty($name)) {
            header("Location:templates/back/identifiant.php?error= Name is required");
             exit();
         }
         else if(empty($password)){
          header("Location:templates/back/identifiant.php?error=Password is required");
          exit();
         } 
         else
         {
         
         $userRepository = new UserRepository();
         $userRepository->connection = new DatabaseConnection();
         $userinfo=$userRepository->loginAD($name,$password);
         $_SESSION['name']=$userinfo->name;
         $_SESSION['id']=$userinfo->id;
         $_SESSION['role_id']=$userinfo->role_id;
         $_SESSION['username']=$userinfo->username;
         if($_SESSION['role_id']=='1'){
            header('Location: index.php?action=homepage');

         }
         else{
            header('location:acceuil.php');
            
         }                                        
}
    }}

    public function acceuil()
    {
        require('C:\xampp\htdocs\Nouveaudossier\ecommerce\acceuil.php');
    }
}
