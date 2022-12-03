<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Login</title>
    <style>

    body{
      background-image: url(images/bg.jpg);
      background-repeat: no-repeat;
      background-size: 1500px;
      background-position: center;
    }
  </style>
  </head>
  <body>
  <body>
    <div class="container">
      <div class="row justify-content-center mt-5">
        <div class="col-md-4">
          <div class="card">
            <div class="card-header bg-transparent mb-0"><h5 class="text-center">Halaman Registrasi</h5></div>
            <div class="card-body">
              <form action="registrasi_action.php" method="POST">
                <div class="form-group">
                  <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
				<div class="form-group">
                  <input type="text" name="nama" class="form-control" placeholder="Nama">
                </div>
                <div class="form-group">
                  <input type="text" name="password" class="form-control" placeholder="Password">
                </div>
				<div class="form-group">
                  <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                  <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
                </div>
                <div class="col md-5">
                  <input type="submit" name="submit" value="Create Account" class="btn btn-primary btn-block">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>