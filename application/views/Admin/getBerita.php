<div class="container">
    <div class="row mt-3">
        <div class="col">
        <div class="card">
            <div class="card-header" >
            <h1 class="card-tittle"><?= $detail['title']; ?></h1>
            </div>
            <div class="card-body">
            <img src="<?= base_url('assets/img/profiles/') . $detail['image']; ?>" class="img-fluid" alt="Responsive image">
            <p class="card-text"><?= html_entity_decode($detail['isi']); ?></p>
            <p class="text-right"><?= date('d F Y', $detail['date_created']); ?></p>
            <a href="<?= base_url('admin/berita'); ?>" class="btn btn-info float-right">BACK</a>
            </div>      
        </div>
    </div>
</div>
