<!-- /.login-logo -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Identifiez vous</title>
         <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome -->
         <link rel="stylesheet" href="../../assets/back/plugins/fontawesome-free/css/all.min.css">
         <!-- icheck bootstrap -->
        <link rel="stylesheet" href="../../assets/back/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
         <!-- Theme style -->
           <link rel="stylesheet" href="../../assets/back/dist/css/adminlte.min.css">
    </head>
    <body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>Identifiez vous</b>
  </div>
  <?php if (isset($_GET['error'])) { ?>
     		<p class="error" style=" background: #F2DEDE;color: #A94442;padding: 10px; width: 95%;border-radius: 5px;margin: 20px auto;"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
      <form action="../../index.php?action=Login" method="POST">
   

        <div class="input-group mb-3">
          <input type="name" name="name" class="form-control" placeholder="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password"  name="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
          <p class="mb-1">
            <a href="forgot-password.html">I forgot my password</a>
          </p>
        </div>
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Login</button>
        </div>
        <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mb-3">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

    
      <!-- <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../assets/back/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../assets/back/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/back/dist/js/adminlte.min.js"></script>
</body>
</html>
