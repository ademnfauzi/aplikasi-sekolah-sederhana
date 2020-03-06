<div class="container">
<h1><b>INPUT NILAI SISWA KELAS IPS</b></h1>

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
            <?php foreach($siswaIPS as $s) : ?>
            <li class="list-group-item">
                <?= $s->nama_siswa; ?>
                <!-- <a href="<?= base_url('guru/input') ?>/<?= $s->nis;  ?>/<?= $s->nama_siswa;?>/<?= $s->kelas; ?>" class=" badge badge-warning float-right mr-1">INPUT NILAI</a> -->
            </li>
            <?php endforeach; ?>
        </ul>
        </div>
    </div>
</div>