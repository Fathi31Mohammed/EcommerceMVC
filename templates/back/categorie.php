<?php $title = "Liste Des Categories | Admin Site E-commerce"; ?>

<?php ob_start(); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Liste Des categorie</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				  <li class="breadcrumb-item"><a href="#">Home</a></li>
				  <li class="breadcrumb-item active">Liste Des categorie</li>
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
			<h3 class="card-title">Liste Des categories
			<a class="btn btn-primary btn-sm" style="width: 50px;" href="templates/back/add_categorie.php#">
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
						<th>Description</th>
						
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($categories as $categorie) {
					?>
					<tr>
						<td><?= $categorie->id ?></td>
						<td><?= $categorie->name ?></td>
						<td><?= $categorie->description ?></td>
						<td class="project-actions text-right">
                          <!-- <a class="btn btn-primary btn-sm" href="/ecommerce/templates/back/add_categorie.php#">
                              <i class="fas fa-folder">
                              </i>
                              Ajouter
                          </a> -->
                          <a class="btn btn-info btn-sm"  style="width: 70px;" href="index.php?action=updateCategorie&id=<?= $categorie->id ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                             
                          </a>
                          <a class="btn btn-danger btn-sm"  style="width: 70px;" href="index.php?action=deleteCt&id=<?= $categorie->id ?>">
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
