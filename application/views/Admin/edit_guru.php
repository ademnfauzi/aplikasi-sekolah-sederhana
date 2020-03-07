<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                FORM UBAH DATA GURU
            </div>
            <div class="container mt-3">
                <form action="" method="post">
                <div class="form-group">
                <input type="hidden" name="id" value="<?= $getUser['id']; ?>">
                
                    <label for="nama">NAMA :</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $getUser['nama_guru']; ?>">
                    <small id="emailHelp" class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="form-group">
                    <label for="npm">NIG :</label>
                    <input type="number" class="form-control" id="nig" name="nig" value="<?= $getUser['nig']; ?>">
                    <small id="emailHelp" class="form-text text-danger"><?= form_error('nig'); ?></small>
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
                <button type="submit" name="ubah" class="btn btn-primary float-right mb-3">UBAH</button>
                <!-- <a href="<?= base_url(); ?>mahasiswa" class="btn btn-info float-right mr-2">BACK</a> -->
                </form>            
                </div>    
            </div>
            </div>

        </div>
    </div>