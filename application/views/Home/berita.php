<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="#">BERITA KARTINI</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav text-uppercase ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">PRESTASI</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">VISI MISI</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">KEGIATAN</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('login'); ?>">LOGIN</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
    <div class="row mt-3">
        <div class="col">
        <div class="card">
            <div class="card-header" >
            <h1 class="card-tittle"><?= $berita['title']; ?></h1>
            </div>
            <div class="card-body">
            <img src="<?= base_url('assets/img/profiles/') . $berita['image']; ?>" class="img-fluid" alt="Responsive image">
            <p class="card-text"><?= html_entity_decode($berita['isi']); ?></p>
            <p class="text-right"><?= date('d F Y', $berita['date_created']); ?></p>
            <a href="<?= base_url(); ?>home" class="btn btn-info float-right">BACK</a>
            </div>      
        </div>
    </div>
</div>
