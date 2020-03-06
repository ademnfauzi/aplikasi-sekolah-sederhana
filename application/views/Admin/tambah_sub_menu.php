<div class="container">
    <form action="<?= base_url('admin/tambah_sub_menu') ?>" method="post" class="user">
    <h1>TAMBAH SUB MENU</h1>
    <br>
    <div class="form-group row">
                  <div class="col mb-3 mb-sm-0">
                      <input type="number" name="menu_id" id="menu_id" class="form-control form-control-user" placeholder="MENU_ID" autocomplete="off"> 
                      <?= form_error('menu_id','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
          </div>
          <div class="form-group row">
                  <div class="col mb-3 mb-sm-0">
                      <input type="text" name="title" id="title" class="form-control form-control-user" placeholder="TITLE" autocomplete="off">
                      <?= form_error('title','<small class="text-danger pl-3">','</small>'); ?> 
                  </div>
          </div>
          <div class="form-group row">
                  <div class="col mb-3 mb-sm-0">
                      <input type="text" name="url" id="url" class="form-control form-control-user" placeholder="URL" autocomplete="off"> 
                      <?= form_error('url','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
          </div>
          <div class="form-group row">
                  <div class="col mb-3 mb-sm-0">
                      <input type="text" name="icon" id="icon" class="form-control form-control-user" placeholder="ICON" autocomplete="off">
                      <?= form_error('icon','<small class="text-danger pl-3">','</small>'); ?> 
                  </div>
          </div>    
    </div>
    <div class="modal-footer">
        <a href="<?= base_url('admin/sub_menu') ?>" class="btn btn-warning">Close</a>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>

</div>