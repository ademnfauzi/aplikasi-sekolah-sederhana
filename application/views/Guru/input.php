
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800">INPUT NILAI SISWA</h1>
         
          <table>
            <ul>
              <!-- <li>NAMA : <?= $query['nama']; ?></li>
              <li>NIS : <?= $user['nomor_induk']; ?></li> -->
            </ul>

          </table>
          <?php foreach($siswaIpa as $s) : ?>
 <!-- <a href="<?= base_url('guru/editNilai') ?>/<?= $s->nis;  ?>/<?= $s->nama ;?>/<?= $s->kelas; ?>" class="btn btn-primary">EDIT</a> -->
            
 <?php endforeach; ?>
  <br>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">NAMA MAPEL</th>
      <th scope="col">NILAI SIKAP</th>
      <th scope="col">NILAI TUGAS</th>
      <th scope="col">NILAI UTS</th>
      <th scope="col">NILAI UAS</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
 <tr>
 <?php foreach($query as $q) : ?>
 <td><?= $q->nama_mapel; ?></td>
 <td><?= $q->nilai_sikap; ?></td>
 <td><?= $q->nilai_tugas; ?></td>
 <td><?= $q->nilai_uts; ?></td>
 <td><?= $q->nilai_uas; ?></td>
 <td>
     <a href="<?= base_url('guru/editNilai'); ?>/<?= $q->id; ?>" class="badge badge-info mr-1">Edit Nilai</a>
 </td>
 </tr>
 <?php endforeach; ?>  

  </tbody>
</table>
        </div>
        <!-- /.container-fluid -->
