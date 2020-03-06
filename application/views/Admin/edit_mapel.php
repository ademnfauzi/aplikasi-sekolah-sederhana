<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                FORM UBAH DATA MATA PELAJARAN
            </div>
            <div class="container mt-3">
                <form action="" method="post">
                <div class="form-group">
                <input type="hidden" name="id_mapel" value="<?= $edit['id_mapel']; ?>">
                <label for="nama">NAMA MAPEL :</label>
                  <input type="text" class="form-control form-control-user" id="nama_mapel" name="nama_mapel" placeholder="NAMA MAPEL" autocomplete="off" value="<?= $edit['nama_mapel']; ?>">
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
                    <option value="<?= $guru->nig; ?>"><?= $guru->nama; ?></option>
                    <?php endforeach; ?>
                </select>
                  <?= form_error('keterangan','<small class="text-danger pl-3">','</small>'); ?>
                </div>
                <button type="submit" name="ubah" class="btn btn-primary float-right mb-3">UBAH</button>
                <!-- <a href="<?= base_url(); ?>mahasiswa" class="btn btn-info float-right mr-2">BACK</a> -->
                </form>            
                </div>    
            </div>
            </div>

        </div>
    </div>