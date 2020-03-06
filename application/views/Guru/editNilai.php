<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                EDIT NILAI SISWA
            </div>
            <div class="container mt-3">
                <form action="" method="post">
                <div class="form-group">
                <input type="hidden" name="id" value="<?= $query['id']; ?>">
                <label for="nama">ID MAPEL :</label>
                  <input type="number" class="form-control form-control-user" id="id_mapel" name="id_mapel" placeholder="ID MAPEL" autocomplete="off" value="<?= $query['id_mapel']; ?>" disabled>
                  <?= form_error('id_mapel','<small class="text-danger pl-3">','</small>'); ?>
                </div>

                <label for="nama">NILAI SIKAP :</label>
                  <input type="number" class="form-control form-control-user" id="nilai_sikap" name="nilai_sikap" placeholder="NILAI SIKAP" autocomplete="off" value="<?= $query['nilai_sikap']; ?>">
                  <?= form_error('nilai_sikap','<small class="text-danger pl-3">','</small>'); ?>
                
                <label for="nama">NILAI TUGAS :</label>
                  <input type="number" class="form-control form-control-user" id="nilai_tugas" name="nilai_tugas" placeholder="NILAI TUGAS" autocomplete="off" value="<?= $query['nilai_tugas']; ?>">
                  <?= form_error('nilai_tugas','<small class="text-danger pl-3">','</small>'); ?>

                <label for="nama">NILAI UTS :</label>
                  <input type="number" class="form-control form-control-user" id="nilai_uts" name="nilai_uts" placeholder="NILAI UTS" autocomplete="off" value="<?= $query['nilai_uts']; ?>">
                  <?= form_error('nilai_uts','<small class="text-danger pl-3">','</small>'); ?>

                <label for="nama">NILAI UAS :</label>
                  <input type="number" class="form-control form-control-user" id="nilai_uas" name="nilai_uas" placeholder="NILAI UAS" autocomplete="off" value="<?= $query['nilai_uas']; ?>">
                  <?= form_error('nilai_uas','<small class="text-danger pl-3">','</small>'); ?>
                <br>
                <button type="submit" name="ubah" class="btn btn-primary float-right mb-3">UBAH</button>
                <!-- <a href="<?= base_url(); ?>mahasiswa" class="btn btn-info float-right mr-2">BACK</a> -->
                </form>            
                </div>    
            </div>
            </div>

        </div>
    </div>