<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                FORM UBAH DATA SUB MENU
            </div>
            <div class="container mt-3">
                <form action="" method="post">
                <div class="form-group">
                <input type="hidden" name="id" value="<?= $edit['id']; ?>">
                    <label for="menu_id">MENU ID :</label>
                    <input type="text" class="form-control" id="menu_id" name="menu_id" value="<?= $edit['menu_id']; ?>">
                    <small id="emailHelp" class="form-text text-danger"><?= form_error('menu_id'); ?></small>
                </div>
                <div class="form-group">
                    <label for="title">TITLE :</label>
                    <input type="text" class="form-control" id="title" name="title" value="<?= $edit['title']; ?>">
                    <small id="emailHelp" class="form-text text-danger"><?= form_error('title'); ?></small>
                </div>
                <div class="form-group">
                    <label for="url">URL :</label>
                    <input type="text" class="form-control" id="url" name="url" value="<?= $edit['url']; ?>">
                    <small id="emailHelp" class="form-text text-danger"><?= form_error('url'); ?></small>
                </div>
                <div class="form-group">
                    <label for="icon">ICON :</label>
                    <input type="text" class="form-control" id="icon" name="icon" value="<?= $edit['icon']; ?>">
                    <small id="emailHelp" class="form-text text-danger"><?= form_error('url'); ?></small>
                </div>

                <button type="submit" name="ubah" class="btn btn-primary float-right mb-3">UBAH</button>
                <!-- <a href="<?= base_url(); ?>mahasiswa" class="btn btn-info float-right mr-2">BACK</a> -->
                </form>            
                </div>    
            </div>
            </div>

        </div>
    </div>