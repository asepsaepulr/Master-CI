<div class="col-md-12 col-sm-12">
	
	<div class="card">
        <div class="card-header">
            <h4 class="card-title m-b-0">Form Fakultas</h4>
            <a href="<?php echo $back; ?>"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back</a>
        </div>
        <div class="card-body">
            <!-- form start -->
            <?php echo form_open_multipart($action, array('class' => 'form-horizontal row-form')); ?>
              <div class="col-md-12">
              	<div class="form-group">
                  <label for="input_kode_fakultas">KODE FAKULTAS</label>
                  <input type="text" class="form-control" id="input_kode_fakultas" name="input_kode_fakultas" value="<?php echo $fakultas->kode_fakultas; ?>">
                </div>
                <div class="form-group">
                  <label for="input_nama_fakultas">NAMA FAKULTAS</label>
                  <input type="text" class="form-control" id="input_nama_fakultas" name="input_nama_fakultas" value="<?php echo $fakultas->nama_fakultas; ?>">
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
                <button type="reset" class="btn btn-danger">Batal</button>
              </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>