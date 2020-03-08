<div class="container">
<h1>Berita</h1>
<?= $this->session->flashdata('message'); ?>
<a href="<?= base_url('admin/tambah_berita'); ?>" class="btn btn-primary">TAMBAH BERITA</a>



<div class="row mt-3">
        <div class="col-md-6">
           <ul class="list-group">
            <?php foreach($berita as $b) : ?>
            <li class="list-group-item">
                <?= $b['title']; ?>
                <a href="<?= base_url(); ?>admin/hapus_berita/<?= $b['id']; ?>" class="badge badge-danger float-right" onclick ="return confirm('yakin akan menghapusnya ?')">HAPUS</a>
                <a href="<?= base_url(); ?>admin/getBeritaByTitle/<?= $b['id']; ?>" class=" badge badge-info float-right mr-1">DETAIL</a>
            </li>
            <?php endforeach; ?>
        </ul>
        </div>
    </div>
    </div>