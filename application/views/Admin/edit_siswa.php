<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                FORM UBAH DATA SISWA
            </div>
            <div class="container mt-3">
                <form action="" method="post">
                <div class="form-group">
                <input type="hidden" name="id" value="<?= $getUser['id']; ?>">
                    <label for="nama">NAMA :</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $getUser['nama']; ?>">
                    <small id="emailHelp" class="form-text text-danger"><?= form_error('nama'); ?></small>
                </div>
                <div class="form-group">
                    <label for="npm">NIS :</label>
                    <input type="number" class="form-control" id="nis" name="nis" value="<?= $getUser['nis']; ?>">
                    <small id="emailHelp" class="form-text text-danger"><?= form_error('nis'); ?></small>
                </div>
                    <div class="form-group">  
                    <select name="kelas" id="kelas" class="btn btn-secondary dropdown-toogle" required>
                    //membuat foreach combo box pada kelas
                    <?php
                        $role_id = $this->session->userdata('role_id');
                        $queryMenu = "SELECT `nama_kelas` 
                                    FROM `kelas`";
                        $kelas = $this->db->query($queryMenu)->result_array();
                        // var_dump($menu);die;
                    ?>
                        <option value="">-PILIH KELAS-</option>
                    <?php foreach($kelas as $k) : ?>    
                        <option value="<?= $k['nama_kelas']; ?>"><?= $k['nama_kelas']; ?></option>
                    <?php endforeach; ?>
                    </select>
                    <?= form_error('kelas','<small class="text-danger pl-3">','</small>'); ?>
                    </div>
                <button type="submit" name="ubah" class="btn btn-primary float-right mb-3">UBAH</button>
                <!-- <a href="<?= base_url(); ?>mahasiswa" class="btn btn-info float-right mr-2">BACK</a> -->
                </form>            
                </div>    
            </div>
            </div>

        </div>
    </div>