<?php $title = "Utilisateurs | Admin Site E-commerce"; ?>

<?php ob_start(); ?>
<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1>Users</h1>
			</div>
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-right">
				  <li class="breadcrumb-item"><a href="#">Home</a></li>
				  <li class="breadcrumb-item active">Users</li>
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
			<h3 class="card-title">Users
			<a class="btn btn-primary btn-sm" style="width:50px;" href="templates/back/add_user.php#">
            <i class="fa fa-user-plus">
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
						<th>Prénom</th>
						<th>Username</th>
						<th>Email</th>
						<th>Password</th>
						<th>Role</th>
						<!-- <th style="width:30%;">Action</th> -->
					</tr>
				</thead>
				<tbody>
					<?php
					foreach ($users as $user) {
					?>
					<tr>
						<td><?= $user->id ?></td>
						<td><?= $user->name ?></td>
						<td><?= $user->prenom ?></td>
						<td><?= $user->username ?></td>
						<td><?= $user->email ?></td>
						<td><?= $user->password ?></td>
						<td><?= $user->role_id===1 
						?
						'<span class="badge badge-success">Admine</span>'
						:
						'<span class="badge badge-danger">Simple User</span>'
						?>
					    </td>
						<td class="project-actions text-right">
                          
                          <a class="btn btn-info btn-sm2" href="index.php?action=updateUser&id=<?= $user->id ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              
                          </a>
                          <a class="btn btn-danger btn-sm2" href="index.php?action=delete&id=<?= $user->id ?>">
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
