<div class="container">
    <form action="<?= base_url('admin/input_mapel_dan_nilai') ?>" method="post" class="user">
    <h1>TAMBAH SISWA DAN MAPEL KE TABEL NILAI</h1>
    <?= $this->session->flashdata('message'); ?>
    <br>
    <div class="form-group">
                  <div class="col mb-3 mb-sm-0">
                  <select name="nis" id="nis" class="btn btn-secondary dropdown-toogle">
                    <option value="">PILIH SISWA</option>
                  <?php foreach($siswa as $s) : ?>
                    <option value="<?= $s->nis; ?>"><?= $s->nama_siswa; ?> | <?= $s->kelas; ?></option>
                  <?php endforeach; ?>
                </select>
                  <?= form_error('nis','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>  
                <div class="form-group">
                  <div class="col mb-3 mb-sm-0">
                <select name="id_kelas" id="id_kelas" class="btn btn-secondary dropdown-toogle">
                    <option value="">PILIH KELAS</option>
                    <option value="01">IPA</option>
                    <option value="02">IPS</option>
                </select>
                  <?= form_error('kelas','<small class="text-danger pl-3">','</small>'); ?>
                  </div></div>
                  <div class="form-group">
                  <div class="col mb-3 mb-sm-0">
                <select name="id_mapel" id="id_mapel" class="btn btn-secondary dropdown-toogle">
                    <option value="">PILIH MAPEL</option>
                  <?php foreach($mapel as $m) : ?>
                    <option value="<?= $m['id_mapel'] ?>"><?= $m['nama_mapel'] ?></option>
                  <?php endforeach; ?>
                </select>
                  <?= form_error('id_mapel','<small class="text-danger pl-3">','</small>'); ?>
                  </div></div>


      </div>
      <div class="modal-footer">
        <a href="<?= base_url('admin/daftar_siswa') ?>" class="btn btn-warning">Close</a>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

</div>