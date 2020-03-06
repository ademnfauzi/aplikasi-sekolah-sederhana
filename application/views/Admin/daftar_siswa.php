
<div class="container">
<h3><b> DAFTAR SISWA </b></h3>

<div class="row">
<div class="col-lg-6">
    <a href="<?= base_url('admin/tambah_siswa') ?>"class="btn btn-primary">ADD STUDENT</a>
</div>
</div>

    
<br>
<?= $this->session->flashdata('message'); ?>

<div class="col-lg-3">
<div class="card bg-success" style="width: 18rem;">
  <div class="card-body "> 
    <h5 class="text-danger font-weight-bold"><h3 class="fas fa-folder"></h3> CHOOSE CLASS</h5>
    <ul class="list-group list-group-flush">
        <a href="<?= base_url('admin/tampil_daftar_siswa_ipa') ?>" class="btn btn-primary">
        <i class="fas fa-flask">
         IPA </i></a>
        <br>
         <a href="<?= base_url('admin/tampil_daftar_siswa_ips') ?>" class="btn btn-primary">
        <i class="fas fa-user-friends">
         IPS </i></a>
         <br>
         <a href="<?= base_url('admin/input_mapel_dan_nilai') ?>" class="btn btn-primary">
         <i class="fas fa-equals"></i>
         INPUT MAPEL DAN NILAI </i></a>
  </ul>
  </div>
</div>
</div>

</div>