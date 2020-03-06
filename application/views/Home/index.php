<div class="jumbotron jumbotron-fluid" style="height:100vh; background-image: url('<?php base_url(); ?>assets/img/red.png'); background-size: 100% 100%;">
  <div class="container text-center mt-5">
  <img src="<?php base_url(); ?>assets/img/kartini.jpg" alt="" width="200" class="rounded-circle ">
    <h1 class="display-4 mt-3" >SMA KARTINI JAKARTA</h1>
    <p class="lead" >SMART | SPIRIT | RELIGIUS</p>
    <hr>
    <a href="#" class="btn btn-dark btn-fill btn-lg">JOIN NOW !</a>  
  </div>
</div>



<h2 class="text-center">MADING SCHOOL</h2>
<div class="separator separator-danger">✻</div>
<div class="container">
  <div class="row-10">
    <div class="col">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner rounded mx-auto d-block">
    <div class="carousel-item active" data-interval="5000">
      <img src="<?= base_url(); ?>assets/img/profiles/20191028_195753_0000.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="5000">
      <img src="<?= base_url(); ?>assets/img/profiles/20191028_195845_0001.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item" data-interval="5000">
      <img src="<?= base_url(); ?>assets/img/profiles/20191031_195845_0000.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>
  </div>
  </div>
</div>
<br>

<div class="jumbotron jumbotron-fluid bg-dark" >
<h2 class="text-center" style="color:white;">BERITA KARTINI</h2>
<div class="separator separator-danger">✻</div>
<div class="container text-center ">
  <div class="row ">
    <?php foreach($max as $b) : ?>
    <div class="col-4">
  <div class="card card-float-left" style="width: 18rem;">
  <img src="<?= base_url('assets/img/profiles/') . $b['image']; ?>" class="card-img-top w-100" style="width:50;">
  <div class="card-body">
    <h5 class="card-title"><?= $b['title']; ?></h5>
    <a href="<?= base_url(); ?>home/berita/<?= $b['id']; ?>" class="btn btn-primary">Full Details</a>
  </div>
</div>
</div>
  <?php endforeach; ?>
</div>
</div>
</div>

<!-- /.container -->
</div>
<div class="container">

  <h1 class="font-weight-light text-center text-lg-left mt-4 mb-0">Gallery Kegiatan</h1>

  <hr class="mt-2 mb-5">

  <div class="row text-center text-lg-left">

    <div class="col-lg-3 col-md-4 col-6">
            <img class="img-fluid img-thumbnail" src="<?= base_url(); ?>assets/img/kegiatan/kegiatan-1.jpg" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
            <img class="img-fluid img-thumbnail" src="<?= base_url(); ?>assets/img/kegiatan/a.jpeg" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">

            <img class="img-fluid img-thumbnail" src="<?= base_url(); ?>assets/img/kegiatan/b.jpeg" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
            <img class="img-fluid img-thumbnail" src="<?= base_url(); ?>assets/img/kegiatan/c.jpeg" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
            <img class="img-fluid img-thumbnail" src="<?= base_url(); ?>assets/img/kegiatan/d.jpeg" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
            <img class="img-fluid img-thumbnail" src="<?= base_url(); ?>assets/img/kegiatan/e.jpeg" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
            <img class="img-fluid img-thumbnail" src="<?= base_url(); ?>assets/img/kegiatan/e.jpeg" alt="">
          </a>
    </div>
    <div class="col-lg-3 col-md-4 col-6">
            <img class="img-fluid img-thumbnail" src="<?= base_url(); ?>assets/img/kegiatan/e.jpeg" alt="">
          </a>
    </div>
</div>
<!-- /.container -->
<br>
<br>
</div>
