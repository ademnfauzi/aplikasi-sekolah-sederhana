
<div class="container">
<h3><b> DAFTAR MATA PELAJARAN </b></h3>

<div class="row">
<div class="col-lg-6">
    <a href="<?= base_url('admin/tambah_mapel') ?>"class="btn btn-primary">TAMBAH MAPEL</a>
</div>
</div>
    
<br>
<?= $this->session->flashdata('message'); ?>

<div class="table-responsive-md">
  <table class="table">
    <thead>
        <tr>
            <th>ID MAPEL</th>
            <th>NAMA MAPEL</th>
            <th>KETERANGAN</th>
            <th>GURU MAPEL</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php foreach($getMapel as $mapel) : ?>
            <td><?= $mapel['id_mapel']; ?></td>
            <td><?= $mapel['nama_mapel']; ?></td>
            <td><?= $mapel['ket']; ?></td>
            <td><?= $mapel['id_guru']; ?></td>
            <td>
            <a href="<?= base_url('admin/hapus_mapel'); ?>/<?= $mapel['id_mapel']; ?>/<?= $mapel['nama_mapel']; ?>" class="badge badge-danger " onclick ="return confirm('yakin akan menghapusnya ?')">HAPUS</a>
            <a href="<?= base_url('admin/edit_mapel'); ?>/<?= $mapel['id_mapel']; ?>/<?= $mapel['nama_mapel']; ?>" class="badge badge-warning  mr-2">EDIT</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</div>

</div>