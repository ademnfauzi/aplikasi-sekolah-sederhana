<div class="container">
    <form action="<?= base_url('admin/tambah_guru') ?>" method="post" class="user">
    <h1>TAMBAH GURU</h1>
    <br>
    <div class="form-group row">
                  <div class="col mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="name" placeholder="Username" name="name" autocomplete="off">
                    <?= form_error('name','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                </div>
                <div class="form-group">
                  <input type="number" class="form-control form-control-user" id="nig" name="nig" placeholder="Enter NIG" autocomplete="off">
                  <?= form_error('nig','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <div class="form-group">  
                <select name="walas" id="walas" class="btn btn-secondary dropdown-toogle" required>
                    <option value="">-WALAS-</option>
                    <?php foreach($kelas as $k) : ?>
                    <option value="<?= $k->id_kelas; ?>"><?= $k->nama_kelas; ?></option>
                    <?php endforeach; ?>
                    <option value="NULL">TIDAK MENJADI WALAS</option>
                </select>
                  <?= form_error('walas','<small class="text-danger pl-3">','</small>'); ?>
                </div>
      <div class="modal-footer">
        <a href="<?= base_url('admin/daftar_guru') ?>" class="btn btn-warning">Close</a>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
</div>