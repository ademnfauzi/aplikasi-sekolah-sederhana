<div class="container">
<h1><b>DASHBOARD ADMIN</b></h1>
<div class="create">
    <a class="btn btn-primary" href="<?= base_url(); ?>admin/registrasi">Create an Account for Login</a>
</div>
<br>
<div class="row">
<div class="col-lg-4">
<div class="card bg-info" style="width: 18rem;">
  <div class="card-body ">
    <h5 class="card-title fas fa-user-graduate">SISWA</h5>
    <?php foreach($maxSiswa as $siswa) ?>
    <p class="card-text"><?= $siswa->total; ?></p>
  </div>
</div>


</div>
<div class="col-lg-4">
<div class="card bg-danger" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title fas fa-chalkboard-teacher">GURU</h5>
    <?php foreach($maxGuru as $siswa) ?>
    <p class="card-text"><?= $siswa->total; ?></p>
  </div>

</div>

</div>

<div class="col-lg-4">
<div class="card bg-success" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title fas fa-newspaper">BERITA</h5>
    <?php foreach($maxBerita as $siswa) ?>
    <p class="card-text"><?= $siswa->total; ?></p>
  </div>
</div>
</div>
<!-- <div class="col-lg-3">
<div class="card bg-white" style="width: 60rem;">
  <div class="card-body ">
    <h5 class="card-title fas fa-chalkboard-teacher"><b> PETUNJUK </b></h5>
      <ul class="font-weight-bold">
        1.  SETELAH MELAKUKAN REGISTRASI PASTIKAN DATA SAMA DENGAN YANG ADA PADA DAFTAR
      </ul>
  </div>

</div>

</div> -->

</div>
</div>