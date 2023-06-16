<?php @session_start();?>
<?php $title = "Ajouter un étulisateur"; ?>

<?php ob_start(); ?>
<h1><br></h1>


<form action="../../index.php?action=addUser" method="post">
<section class="content">
      <div class="row">
        <div class="col-md-6"  style="margin-left:25%;">
          <div class="card card-primary" style="background-color:LightCyan;">
            <div class="card-header">
              <h3 class="card-title">Ajouter un étulisateur</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>



            <!-- la partie modifier -->
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name :</label>
                <input type="text" id="name"  name="name" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Prénom :</label>
                <input type="text" id="prenom"  name="prenom" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Email :</label>
                <input type="text" id="email" name="email" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">User Name :</label>
                <input type="text" id="username" name="username" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Password :</label>
                <input type="password" id="password" name="password" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Role ID :</label>
                <input type="text" id="role_id" name="role_id" class="form-control">
              </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      <div class="row">
        <div class="col-12">
          <a href="../../index.php?action=homepage" class="btn btn-secondary">Anuller</a>
          <input type="submit" name="submitADD" value="Ajouter un nouveau étulisateur" class="btn btn-success float-right">
        </div>
      </div>
    </section>
</form>

<?php $content = ob_get_clean(); ?>

<?php //require('layout.php') ?>
<?php require('css_require.php') ?>

