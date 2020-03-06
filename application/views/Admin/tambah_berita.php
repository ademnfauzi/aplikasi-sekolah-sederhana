
    <div class="container">
<div class="row">
  <div class="col-lg-10">
  <?php echo form_open_multipart('admin/tambah_berita');?>
    <div class="form-group">
    <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default" >TITLE</span>
  <input type="text" class="form-control" name="title" id="title" autocomplete="off">
     </div>
     <?= form_error('title','<small class="text-danger pl-3">','</small>'); ?>

    </div>
    <div class="form-group">
    <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">ISI</span></div>
    <textarea name="isi" id="isi" class="form-control" rows="18" aria-label="With textarea">
    
    </textarea>
    <?= form_error('isi','<small class="text-danger pl-3">','</small>'); ?>
    </div>

    <div class="form-group">
    <div class="input-group-prepend">
      <div class="custom-file">
      <input type="file" name="image" id="image" class="custom-file-input">
      <label for="image" class="custom-file-label">Choose File</label>
      </div>
    </div>
    <hr>
    <div class="form-group row justify-content-end">
      <div class="col-sm-2">
    <button class="btn btn-primary btn-lg" type="submit" role="group">KIRIM</button>
      </div>
    </div>
    </form>
  </div>
</div>
</div>
</div>