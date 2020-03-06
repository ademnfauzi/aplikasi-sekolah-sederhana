<div class="container">
    <form action="<?= base_url('admin/tambah_mapel') ?>" method="post" class="user">
    <h1>TAMBAH MATA PELAJARAN</h1>
    <br>
    <div class="form-group row">
                  <div class="col mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="id_mapel" placeholder="ID MAPEL" name="id_mapel" autocomplete="off">
                    <?= form_error('id_mapel','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="nama_mapel" name="nama_mapel" placeholder="NAMA MAPEL" autocomplete="off">
                  <?= form_error('nama_mapel','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <div class="form-group">  
                <select name="keterangan" id="keterangan" class="btn btn-secondary dropdown-toogle" required>
                    <option value="">PILIH KETERANGAN</option>
                    <option value="UMUM">UMUM</option>
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                </select>
                  <?= form_error('keterangan','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <div class="form-group">  
                <select name="id_guru" id="id_guru" class="btn btn-secondary dropdown-toogle" required>
                    <option value="">PILIH GURU</option>
                    <?php foreach($addGuru as $guru) : ?>
                    <option value="<?= $guru->nig; ?>"><?= $guru->nama_guru; ?></option>
                    <?php endforeach; ?>
                </select>
                  <?= form_error('keterangan','<small class="text-danger pl-3">','</small>'); ?>
                </div>
      </div>
      <div class="modal-footer">
        <a href="<?= base_url('admin/mapel') ?>" class="btn btn-warning">Close</a>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

</div>