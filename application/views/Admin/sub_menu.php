<div class="container">
<h1>SUB MENU</h1>

<div class="row">
<div class="col-lg-6">        
    <?= $this->session->flashdata('message'); ?>
</div>
</div>

<div class="row">
<div class="col-lg-6">
    <a href="<?= base_url('admin/tambah_sub_menu') ?>" class="btn btn-primary">ADD SUB MENU</a>          
</div>
</div>
<br>


<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">MENU ID</th>
      <th scope="col">TITLE</th>
      <th scope="col">URL</th>
      <th scope="col">ICON</th>
      <th scope="col">IS ACTIVE</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
 <tr>
    <?php foreach($all as $a) : ?>
    <td><?= $a->id; ?></td>
    <td><?= $a->menu_id; ?></td>
    <td><?= $a->title; ?></td>
    <td><?= $a->url; ?></td>
    <td><?= $a->icon; ?></td>
    <td><?= $a->is_active; ?></td>
    <td>
        <a href="<?= base_url('admin/hapus_sub_menu'); ?>/<?= $a->id; ?>/<?= $a->title; ?>" class="badge badge-danger " onclick ="return confirm('yakin akan menghapusnya ?')">HAPUS</a>
        <a href="<?= base_url('admin/edit_sub_menu'); ?>/<?= $a->id; ?>/<?= $a->title; ?>" class="badge badge-warning  mr-2">EDIT</a>
    </td>
 </tr>
    <?php endforeach; ?>

  </tbody>
</table>
</div>