<div class="container">
    <form action="<?= base_url('admin/tambah_siswa') ?>" method="post" class="user">
    <h1>TAMBAH SISWA</h1>
    <br>
    <div class="form-group row">
                  <div class="col mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="name" placeholder="Username" name="name" autocomplete="off">
                    <?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-user" id="nis" name="nis" placeholder="Enter NIS" autocomplete="off">
                  <?= form_error('nis','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <div class="form-group">  
                <select name="kelas" id="kelas" class="btn btn-secondary dropdown-toogle" required>
                    <option value="">PILIH KELAS</option>
                    <option value="IPA">IPA</option>
                    <option value="IPS">IPS</option>
                </select>
                  <?= form_error('kelas','<small class="text-danger pl-3">','</small>'); ?>
                </div>
      </div>
      <div class="modal-footer">
        <a href="<?= base_url('admin/daftar_siswa') ?>" class="btn btn-warning">Close</a>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

</div>