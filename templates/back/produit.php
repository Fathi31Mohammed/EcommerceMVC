<?php $title = "Produit | Admin Site E-commerce"; ?>

<?php ob_start(); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Liste Des produits</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				  <li class="breadcrumb-item"><a href="#">Home</a></li>
				  <li class="breadcrumb-item active">Liste Des produits</li>
				</ol>
			</div>
		</div>
	</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

	<!-- Default box -->
	<div class="card">
		<div class="card-header" style="background-color:DarkTurquoise;">
			<h3 class="card-title">Liste Des produits
			<a class="btn btn-primary btn-sm" style="width:50px;" href="templates/back/add_produit.php#">
	    <i class="fa fa-plus" style="font-size:20px;color:white"></i>
        </i>                       
    </a> 
			</h3>

			<div class="card-tools">
				<button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
				  <i class="fas fa-minus"></i>
				</button>
				<button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
				  <i class="fas fa-times"></i>
				</button>
			</div>
		</div>
		<div class="card-body p-0">
			<table class="table table-striped projects">
				<thead>
					<tr>
						<th>Id</th>
						<th>Name</th>
						<th>shortdescription</th>
						<th>description</th>
						<th>price</th>
                        <th>Categorie</th>
						<th>Image</th>
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($produits as $produit) {
					?>
					<tr>
						<td><?= $produit->id ?></td>
						<td><?= $produit->name ?></td>
						<td><?= $produit->shortdescription ?></td>
						<td><?= $produit->description ?></td>
                        <td><?= $produit->price ?></td>
						<td><?= $produit->nameC ?></td>
						<td><img src="assets/front/img/<?= $produit->image ?>" style="width:50px"></td>
						<td class="project-actions text-right">


                          <!-- <a class="btn btn-primary btn-sm" href="index.php?action=addproduit&id=<?= $produit->id ?>">
                              <i class="fas fa-folder">
                              </i>
                              Ajouter
                          </a> -->
                          <a class="btn btn-info btn-sm" style="width: 70px;" href="index.php?action=updateProduit&id=<?= $produit->id ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              
                          </a>
                          <a class="btn btn-danger btn-sm" style="width: 70px;" href="index.php?action=deletePr&id=<?= $produit->id ?>">
                              <i class="fas fa-trash">
                              </i>
                              
                          </a>
                      </td>
					</tr>
					<?php
					}
					?>
				</tbody>
			</table>
		</div>
		<!-- /.card-body -->
	</div>

	<!-- /.card -->
</section>
<!-- /.content -->

<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>
