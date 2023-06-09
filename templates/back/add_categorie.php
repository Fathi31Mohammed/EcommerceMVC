<?php $title = "Le blog de l'AVBN"; ?>

<?php ob_start(); ?>
<h1>Ajouter une categorie</h1>


<form action="../../index.php?action=addcategorie" method="post">
<section class="content">
      <div class="row">
        <div class="col-md-6"  style="margin-left:25%;" >
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ajouter une categorie</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>

            <!-- la partie modifier -->
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Id :</label>
                <input type="text" id="id"  name="id" class="form-control">
              </div>


              <div class="form-group">
                <label for="inputName">NOM :</label>
                <input type="text" id="name" name="name" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Description :</label>
                <input type="text" id="description" name="description" class="form-control">
              </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Anuller</a>
          <input type="submit" name="submitADD" value="Ajouter un nouveau Catégorie" class="btn btn-success float-right">
        </div>
      </div>
    </section>
</form>

<?php $content = ob_get_clean(); ?>

<?php require('css_require.php') ?>
