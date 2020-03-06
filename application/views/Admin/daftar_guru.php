
<div class="container">
<h3>DAFTAR GURU</h3>

<?= $this->session->flashdata('message'); ?>
<div class="row mt-3">
        <div class="col-md-6">
           <a href="<?= base_url('admin/tambah_guru') ?>" class="btn btn-primary">ADD TEACHER</a>
        </div>
    </div> 
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group ">
                <input type="text" class="form-control" placeholder="Cari Data Mahasiswa" name="keyword" autocomplete="off">
                <div class="input-group-append" >
                    <button class="btn btn-primary" type="submit">Cari</button>
                </div>
                </div>
            </form>
    <br>
    <?php if( empty($guru)) : ?>
        <div class="alert alert-danger" role="alert">
            Data tidak ditemukan !
        </div>
    <?php endif; ?>
        </div>
    </div> 


    <div class="row mt-3 mr-3">
        <div class="col-md-6">
           <ul class="list-group">
            <?php foreach($guru as $s) : ?>
            <li class="list-group-item">
                <?= ++$start; ?> |
                <?= $s['nama_guru']; ?>
                <a href="<?= base_url(); ?>admin/hapus/<?= $s['nama_guru']; ?>/<?= $s['id']; ?>/<?= $s['role_id']; ?>" class=" badge badge-danger float-right" onclick ="return confirm('yakin akan menghapusnya ?')">HAPUS</a>
                <a href="<?= base_url(); ?>admin/detail/<?= $s['nama_guru']; ?>/<?= $s['id']; ?>/<?= $s['role_id']; ?>" class=" badge badge-info float-right mr-1">DETAIL</a>
                <a href="<?= base_url(); ?>admin/edit/<?= $s['nama_guru']; ?>/<?= $s['id']; ?>/<?= $s['role_id']; ?>" class=" badge badge-warning float-right mr-1">EDIT</a>
            </li>
            <?php endforeach; ?>
        </ul>
        </div>
    </div>
    <br>
        <?=  $this->pagination->create_links(); ?>
</div>