<?php $title = "Le blog de l'AVBN"; ?>

<?php ob_start(); ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="margin-left:-233px;">modifier un Produit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">modifier un Produit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6"  style="margin-left:10%;">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Parametre de modification</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>



            <!-- la partie modifier -->
            <div class="card-body">
            <Form action = "index.php?action=updateProduit" method="POST" enctype="multipart/form-data"> 

            <div class="form-group">
                <label for="inputName">ID :</label>
                <input type="text" id="id"  name="id" value="<?= $produit->id ?>"  class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Name :</label>
                <input type="text" id="name"  name="name" value="<?= $produit->name ?>" class="form-control">
              </div>

              
              <div class="form-group">
                <label for="inputName">shortdescription :</label>
                <input type="text" id="shortdescription" name="shortdescription" value="<?= $produit->shortdescription ?>" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">description:</label>
                <input type="text" id="description" name="description" value="<?= $produit->description ?>" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">price :</label>
                <input type="text" id="price" name="price" value="<?= $produit->price ?>" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">category_id  :</label>
                <input type="text" id="category_id" name="category_id" value="<?= $produit->category_id?>" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Image  :</label><br>
                <input type="file" id="image" name="image" value="<?= $produit->image?>" >
              </div>
              <!-- la partie modifier -->
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Anuller</a>
          <input type="submit" name="submitupp" value="modifier un Produit" class="btn btn-success float-right">
        </div>
      </div>
</form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>
