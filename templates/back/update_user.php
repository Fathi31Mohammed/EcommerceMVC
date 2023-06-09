<?php $title = "Le blog de l'AVBN"; ?>

<?php ob_start(); ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="margin-left:-233px;">modifier un etulisateur</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">modifier un etulisateur</li>
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
            <Form action = "index.php?action=updateUser" method="POST"> 

            <div class="form-group">
                <label for="inputName">ID :</label>
                <input type="text" id="id"  name="id" value="<?= $user->id ?>"  class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Name :</label>
                <input type="text" id="name"  name="name" value="<?= $user->name ?>" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Prénom :</label>
                <input type="text" id="prenom"  name="prenom" value="<?= $user->prenom ?>" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Email :</label>
                <input type="text" id="email" name="email" value="<?= $user->email ?>" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">User Name :</label>
                <input type="text" id="username" name="username" value="<?= $user->username ?>" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Password :</label>
                <input type="text" id="password" name="password" value="<?= $user->password ?>" class="form-control">
              </div>

              <div class="form-group">
                <label for="inputName">Role ID :</label>
                <input type="text" id="idR" name="idR" value="<?= $user->role_id ?>" class="form-control">
              </div>
              <!-- la partie modifier -->
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Anuller</a>
          <input type="submit" name="submitupp" value="modifier un étulisateur" class="btn btn-success float-right">
        </div>
      </div>
</form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>
