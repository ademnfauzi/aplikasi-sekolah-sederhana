<div class="container">
    <form action="<?= base_url('guru/change_password'); ?>" method="post" class="user">
    <h1>CHANGE PASSWORD</h1>
    <br>
    <?= $this->session->flashdata('message'); ?>
    <div class="form-group row">
                  <div class="col mb-3 mb-sm-0">
                    <input type="password" class="form-control form-control-user" id="current" placeholder="Current Password" name="current" autocomplete="off">
                    <?= form_error('current','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="new_password1" placeholder="New Password" name="new_password1" autocomplete="off">
                    <?= form_error('new_password1','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-user" id="new_password2" placeholder="Repeat New Password" name="new_password2" autocomplete="off">
                    <?= form_error('new_password2','<small class="text-danger pl-3">','</small>'); ?>
                  </div>
      <div class="modal-footer">
        <a href="<?= base_url('guru/index') ?>" class="btn btn-warning">Close</a>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>
</div>