<?php $title = "Tableau De Bord | Espaace Admin"; ?>

<?php ob_start(); ?>
<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
	<div class="row mb-2">
	  <div class="col-sm-6">
		<h1 class="m-0">tableau de bord</h1>
	  </div><!-- /.col -->
	  <div class="col-sm-6">
		<ol class="breadcrumb float-sm-right">
		  <li class="breadcrumb-item"><a href="#">Home</a></li>
		  <li class="breadcrumb-item active">tableau de bord</li>
		</ol>
	  </div><!-- /.col -->
	</div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
  <div class="container-fluid">
	<div class="row">
	  
	  <!-- /.col-md-6 -->
	  <div class="col-lg-6" style="margin-left:25%;">
		<div class="card card-primary card-outline" >
		  <div class="card-header" style="background-color:DarkTurquoise;">
			<h5 class="m-0" >Liste des Catégories :</h5>
		  </div>
		  <div class="card-body" style="background-color:LightCyan;">
			<h6 class="card-title">Liste des Catégories :</h6>

			<p class="card-text">ICI VOUS POUVEZ VOIRE VOTRE LISTE DES CATEGORIES.</p>
			<a href="index.php?action=categorie" class="btn btn-primary">Afficher La Liste</a>
			<a href="templates/back/add_categorie.php" class="btn btn-primary">Ajouter Une Categorie</a>
		  </div>
		</div>

		<div class="card card-primary card-outline">
		  <div class="card-header" style="background-color:DarkTurquoise;">
			<h5 class="m-0">Liste des utulisateurs :</h5>
		  </div>
		  <div class="card-body" style="background-color:LightCyan;">
			<h6 class="card-title">Liste des utulisateurs</h6>

			<p class="card-text">ICI VOUS POUVEZ VOIRE VOTRE LISTE DES UTULISATEURS.</p>
			<a href="index.php?action=users#" class="btn btn-primary">Afficher La Liste</a>
			<a href="templates/back/add_user.php" class="btn btn-primary">Ajouter Un utulisateur</a>
		  </div>
		</div>

		<div class="card card-primary card-outline">
		  <div class="card-header" style="background-color:DarkTurquoise;">
			<h5 class="m-0">Liste des produit :</h5>
		  </div>
		  <div class="card-body" style="background-color:LightCyan;">
			<h6 class="card-title">Liste des produit</h6>

			<p class="card-text">ICI VOUS POUVEZ VOIRE VOTRE LISTE DES PRODUIT.</p>
			<a href="index.php?action=produit" class="btn btn-primary">Afficher La Liste</a>
			<a href="templates/back/add_produit.php" class="btn btn-primary">Ajouter Un Produit</a>
		  </div>
		</div>



	  </div>
	  <!-- /.col-md-6 -->
	</div>
	<!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

<?php $content = ob_get_clean(); ?>
<?php //require('css_require.php') ?>

<?php 
if(!empty($_GET['action']) && $_GET['action']==='homepage'){
require('layout.php') ; }
else{require('css_require.php'); }
?>
