<?php $title = "Admin Site E-commerce"; ?>

<?php ob_start(); ?>
<h1>Admin Site E-commerce</h1>
<p>Une erreur est survenue : <?= $errorMessage ?></p>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>
