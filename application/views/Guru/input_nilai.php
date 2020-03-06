<div class="container">
<div class="col-lg-3">
<div class="card bg-success" style="width: 18rem;">
  <div class="card-body ">
  <h3 class="fas fa-folder"></h3> 
    <h5 class="text-danger font-weight-bold"> CHOOSE CLASS</h5>
    <ul class="list-group list-group-flush">
        <a href="<?= base_url('guru/tampil_daftar_siswa_ipa') ?>" class="btn btn-primary">
        <i class="fas fa-flask">
         IPA </i></a>
        <br>
         <a href="<?= base_url('guru/tampil_daftar_siswa_ips') ?>" class="btn btn-primary">
        <i class="fas fa-user-friends">
         IPS </i></a>
  </ul>
  </div>
</div>
</div>

<!-- <div class="col-lg-3">
<?php if($join["walas"] === "01") : ?>
  <a href="<?= base_url('guru/tampil_daftar_siswa_ipa') ?>" class="btn btn-primary">
  <?php endif; ?>
<?php if($join["walas"] === "02") : ?>
  <a href="<?= base_url('guru/tampil_daftar_siswa_ips') ?>" class="btn btn-primary">
  <?php endif; ?>
</div> -->

</div>