<?php

require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\controllers\homepage.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\controllers\user\list.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\controllers\user\add.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\controllers\user\update.php');

require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\model\categories.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\controllers\categorie\list.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\controllers\categorie\add.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\controllers\categorie\update.php');

require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\model\produit.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\controllers\produit\list.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\controllers\produit\add.php');
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\controllers\produit\update.php');

use Application\Controllers\Homepage\Homepage;
use Application\Controllers\User\User;
use Application\Controllers\User\Add\AddUser;
use Application\Controllers\User\Update\UpdateUser;

use Application\Controllers\categorie\categorie;
use Application\Controllers\categorie\Add\AddCategories;
use Application\Controllers\categorie\Update\Updatecategorie;

use Application\Controllers\produit\produit;
use Application\Controllers\produit\Add\Addproduit;
use Application\Controllers\produit\Update\Updateproduit;

try {

    // ---------------------<parametre De Users>-----------------------------
    if (isset($_GET['action']) && $_GET['action'] !== '') {
        if ($_GET['action'] === 'users') {
            (new User())->execute();}
            
            elseif ($_GET['action'] === 'addUser') {
                $name=$_POST['name'];
                $prenom=$_POST['prenom'];
                $email=$_POST['email'];
                $username=$_POST['username'];
                $password=$_POST['password'];
                $role_id =$_POST['role_id'];
                $input=array("name"=>"$name","prenom"=>"$prenom","email"=>"$email","username"=>"$username" ,"password"=>"$password" ,"role_id"=>"$role_id" );
                // print_r($input);
                (new AddUser())->execute($input);}

                elseif ($_GET['action'] === 'AddCliant') {
                    $name=$_POST['name'];
                    $prenom=$_POST['prenom'];
                    $email=$_POST['email'];
                    $username=$_POST['username'];
                    $password=$_POST['password'];
                    // $role_id =$_POST['role_id'];
                    $input=array("name"=>"$name","prenom"=>"$prenom","email"=>"$email","username"=>"$username" ,"password"=>"$password" );
                    //print_r($input);
                     (new AddUser())->executecliant($input);
                }

            elseif ($_GET['action'] === 'updateUser') {
                if(!empty($_GET['id'])){
                    $id=$_GET['id'];
                    (new UpdateUser())-> executegetuser($id);}

                if(empty($_GET['id'])){
                $id=$_POST['id'];
                $name=$_POST['name'];
                $prenom=$_POST['prenom'];
                $email=$_POST['email'];
                $username=$_POST['username'];
                $password=$_POST['password'];
                $role_id =$_POST['idR'];
                $input=array("name"=>"$name","prenom"=>"$prenom","email"=>"$email","username"=>"$username" ,"password"=>"$password" ,"role_id"=>"$role_id" );
                (new UpdateUser())-> execute( $id, $input);}}  

            elseif ($_GET['action'] === 'delete') {
                if(!empty($_GET['id'])){
                $id=$_GET['id'];
                (new User())-> delete($id);}
            }
        // ---------------------<parametre De Users>-----------------------------

// ***************************************************************************************************

        // ---------------------<parametre De Categorie>-----------------------------

        elseif ($_GET['action'] === 'categorie'){
                (new categorie())->execute();}

            elseif ($_GET['action'] === 'addcategorie') {
                $id=$_POST['id'];
                $name=$_POST['name'];
                $description = $_POST['description'];
                $input=array("id"=>"$id","name"=>"$name","description"=>"$description");
                // print_r($input);
                (new AddCategories())->execute($input);
            }

                elseif ($_GET['action'] === 'updateCategorie'){
                    if(!empty($_GET['id'])){
                    $id=$_GET['id'];
                    (new Updatecategorie())-> executegetcategorie( $id );}
                    if(empty($_GET['id'])){
                        $id=$_POST['id'];
                        $name=$_POST['name'];
                        $description = $_POST['description'];
                        $input=array("name"=>"$name","description"=>"$description" ,"id"=>"$id");
                        (new Updatecategorie())-> execute( $id, $input);
                    }

                    } elseif ($_GET['action'] === 'deleteCt') {
                        if(!empty($_GET['id'])){
                            $id=$_GET['id'];
                            (new categorie())-> deleteCt($id);}}  
                       
        // ---------------------<parametre De Categorie>-----------------------------
               
    // ***************************************************************************************************

        // ---------------------<parametre De Produit>-----------------------------                        
                        

                elseif ($_GET['action'] === 'produit'){
                    (new produit())->execute();}

                elseif ($_GET['action'] === 'Addproduit') {
                    if(isset($_POST['id'])){
                    $id=$_POST['id'];
                    $name=$_POST['name'];
                    $shortdescription=$_POST['shortdescription'];
                    $description=$_POST['description'];
                    $price =$_POST['price'];
                    $category_id =$_POST['category_id'];
                    $image = basename($_FILES["image"]["name"]);
                    $uploads_path = 'assets/front/img//'.$image;
                    $tmp_name = $_FILES["image"]["tmp_name"];
                    move_uploaded_file($tmp_name, "$uploads_path");
                    $input=array("id"=>"$id","name"=>"$name","shortdescription"=>"$shortdescription" ,"description"=>"$description","price"=>"$price" ,"category_id"=>"$category_id","image"=>"$image" );
                    (new Addproduit())->execute($input);}
                    // print_r($input);

                }

                    elseif ($_GET['action'] === 'updateProduit') {
                        if(!empty($_GET['id']))
                        {
                            $id=$_GET['id'];
                            (new UpdateProduit())-> executegetproduit($id);
                        }
                            
    
                        if(empty($_GET['id'])){
                            $id=$_POST['id'];
                            $name=$_POST['name'];
                            $shortdescription=$_POST['shortdescription'];
                            $description=$_POST['description'];
                            $price =$_POST['price'];
                            $category_id =$_POST['category_id'];
                            $image = basename($_FILES ['image']['name']);
                            $uploads_path='assets/front/img/'.$image;
                            $tmp_name = $_FILES["image"]["tmp_name"];
                            move_uploaded_file($tmp_name, "$uploads_path");
                            if(!empty($image)){
                                $input=array("name"=>"$name","shortdescription"=>"$shortdescription" ,"description"=>"$description","price"=>"$price" ,"image"=>"$image" ,"category_id"=>$category_id );
                                 (new UpdateProduit())-> execute( $id, $input);
                            }else
                            {
                                $input=array("name"=>"$name","shortdescription"=>"$shortdescription" ,"description"=>"$description","price"=>"$price" ,"category_id"=>$category_id );
                                (new UpdateProduit())-> executesansimage( $id, $input);
                            }
                           
                         }
                        // print_r($input);
                         }
                         elseif ($_GET['action'] === 'homepage') 
                         {
                             (new Homepage())->execute();
                         }

                         elseif ($_GET['action'] === 'deletePr') {
                            if(!empty($_GET['id'])){
                                $id=$_GET['id'];
                                (new produit())-> deletePr($id);
                            }
                        }
        // ---------------------<parametre De Produit>-----------------------------                     
   // ***************************************************************************************************

        // ---------------------<parametre identification d'admin'>-----------------------------     
                            
                         elseif ($_GET['action'] === 'loginAdmin') {
                                    $name=$_POST['name'];
                                    $password=$_POST['password'];
                            if(isset($name) && isset($password)){
                                    (new User())-> login($name,$password); 
                                }

                            else{
                                    // echo"<center></center>";
                                    $message_erreur = "CHECK YOUR NAME OR PASSWORD";
                                }
                                if(isset($message_erreur)) {
                                    echo '<p>'.$message_erreur.'</p>';
                                   }
                            }
         // ---------------------<parametre identification d'admin'>----------------------------- 
         
         // ---------------------<parametre identification simple user'>-----------------------------  
    //                         elseif ($_GET['action'] === 'loginUser') {
    //                             $name=$_POST['name'];
    //                             $password=$_POST['password'];
    //                             if(isset($name) && isset($password)){
    //                             (new User())-> login($name,$password); 
    //                                                                   }

    //                             else{
    //                                  // echo"<center></center>";
    //                                  $message_erreur = "CHECK YOUR NAME OR PASSWORD";
    //                                 }
    //                             if(isset($message_erreur)) {
    //                             echo '<p>'.$message_erreur.'</p>';
    //        }
    // }
         // ---------------------<parametre identification simple user'>-----------------------------   
    //  ***************************************************************************************************
    elseif ($_GET['action'] === 'acceuil') 
    {
        (new User())->acceuil();
    }
        
        
        else {
            throw new Exception("La page que vous recherchez n'existe pas ");
        }
    }

     else {
        (new Homepage())->execute();
    }
}
catch (Exception $e) {
    $errorMessage = $e->getMessage();

    require('C:\xampp\htdocs\Nouveaudossier\ecommerce\templates\back\error.php');
}
