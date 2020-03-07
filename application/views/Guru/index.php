<div class="container">
<?= $this->session->flashdata('message'); ?>
<div class="row ">
<div class="col-lg">
<div class="card text-black bg-white mb-3" style="max-width: 25rem;">
  <h3><div class="card-header text-center bg-success fas fa-info"> | DASHBOARD GURU</div></h3>
  <div class="card-body">
    <li>
    <b><label for="nama" class="">NAMA  :</label>
      <?= $index['nama_guru'];  ?>
    </li>
    <li>
    <label for="nig">NIG :</label>
      <?= $index['nig'];  ?>
    </li>
  </div>
</div>
</div>
</div>
</div>