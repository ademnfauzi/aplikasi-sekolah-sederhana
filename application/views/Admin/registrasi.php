<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Register</title>

  <!-- Custom fonts for this template-->
  <link href="<?= base_url(); ?>assets/vendor/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?= base_url(); ?>assets/vendor/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          <div class="col-lg">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                <?= $this->session->flashdata('message'); ?>
              </div>
              <form class="user" method="post" action="<?= base_url('login/registrasi'); ?>">
                <div class="form-group row">
                  <div class="col mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="name" placeholder="Username" name="name">
                    <?= form_error('username','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-user" id="nomor_induk" name="nomor_induk" placeholder="Enter NOMOR INDUK">
                  <?= form_error('nomor_induk','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                    <?= form_error('password1','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                  <div class="col-sm-6">
                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Repeat Password">
                    <?= form_error('password2','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                  <div class="form-group">
                  <div class="col-sm-6">
                    <select name="role_id" id="role_id" class="btn btn-secondary dropdown-toogle">
                        <?php foreach($role as $r) : ?>
                        <option value="<?= $r['id']; ?>"><?= $r['role']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    </div>
                  </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">Register Account</button>
                </form>
                <hr>
              <div class="text-center">
                <a class="small" href="<?= base_url('login'); ?>">Already have an account? Login!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?= base_url(); ?>assets/vendor/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/vendor/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?= base_url(); ?>assets/vendor/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?= base_url(); ?>assets/vendor/js/sb-admin-2.min.js"></script>

</body>

</html>
