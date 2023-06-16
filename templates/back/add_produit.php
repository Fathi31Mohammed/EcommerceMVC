<?php 
require_once('C:\xampp\htdocs\Nouveaudossier\ecommerce\src\controllers\produit\list.php');
use Application\Controllers\produit\produit;
$title = "Ajouter un Produit"; 

?>

<?php ob_start(); ?>
<h1><br></h1>


<form action="../../index.php?action=Addproduit" method="post" enctype="multipart/form-data">
<section class="content">
      <div class="row">
        <div class="col-md-6"  style="margin-left:25%;" >
          <div class="card card-primary" style="background-color:LightCyan;">
            <div class="card-header">
              <h3 class="card-title">Ajouter un produit</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>



            <!-- la partie modifier -->
            <div class="card-body">

            <div class="form-group">
                <label for="inputName">ID :</label>
                <input type="text" id="id"  name="id" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputName">NAME :</label>
                <input type="text" id="name"  name="name" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Short Description :</label>
                <input type="text" id="shortdescription"  name="shortdescription" class="form-control">
              </div>


              <div class="form-group">
                <label for="inputName">Description :</label>
                <input type="text" id="description" name="description" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">price :</label>
                <input type="text" id="price" name="price" class="form-control">
              </div>

              <div class="form-group">
              <label for="exampleInputPassword1">Categorie</label>
              <select class="form-control" aria-label="Default select example" name="category_id" style=" width: 433px; ">
                  <?php
                    $categories = (new produit ())->selectcatego();
                   foreach($categories as $Catigorie){ ?>
                    <option  value="<?= $Catigorie->id ?>"><?= $Catigorie->name?></option>
                  <?php } ?> 
              </select>
              </div>
              <!-- <div class="form-group"> -->
                <label for="inputName">Image :</label><br>
                <input type="file" id="image" name="image" >
              <!-- </div> -->
              <!-- la partie modifier -->
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      <div class="row">
        <div class="col-12">
          <a href="../../index.php?action=homepage" class="btn btn-secondary">Anuller</a>
          <input type="submit" name="submitADD" value="Ajouter un nouveau Produit" class="btn btn-success float-right">
        </div>
      </div>
    </section>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('css_require.php') ?>
