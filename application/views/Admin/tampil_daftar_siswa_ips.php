<div class="container">
<h1><b>DAFTAR SISWA KELAS IPS</b></h1>

<div class="row">
            <div class="col-lg-6">
            <?php if(validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
</div>
</div>


    <div class="row mt-3">
        <div class="col-md-6">
           <ul class="list-group">
            <?php foreach($siswa as $s) : ?>
            <li class="list-group-item">
                <?= $s->nama; ?>
                <a href="<?= base_url(); ?>admin/hapus/<?= $s->nama; ?>/<?= $s->id; ?>/<?= $s->role_id; ?>" class="badge badge-danger float-right" onclick ="return confirm('yakin akan menghapusnya ?')">HAPUS</a>
                <a href="<?= base_url(); ?>admin/detail/<?= $s->nama; ?>/<?= $s->id; ?>/<?= $s->role_id; ?>" class=" badge badge-info float-right mr-1">DETAIL</a>
                <a href="<?= base_url(); ?>admin/edit/<?= $s->nama; ?>/<?= $s->id; ?>/<?= $s->role_id; ?>" class=" badge badge-warning float-right mr-1">EDIT</a>
            </li>
            <?php endforeach; ?>
        </ul>
        </div>
    </div>
</div>