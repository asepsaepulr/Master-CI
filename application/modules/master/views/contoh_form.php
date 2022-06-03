<div class="col-md-12 col-sm-12">
	
	<div class="card">
        <div class="card-header">
            <h4 class="card-title m-b-0">Form Contoh</h4>
            <a href="<?php echo $back; ?>"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Back</a>
        </div>
        <div class="card-body">
            <!-- form start -->
            <?php echo form_open_multipart($action, array('class' => 'form-horizontal row-form')); ?>
              <div class="col-md-12">
              	<div class="form-group">
                  <label for="input_kolom_1">LABEL KOLOM 1</label>
                  <input type="text" class="form-control" id="input_kolom_1" name="input_kolom_1" value="<?php echo $contoh->kolom_ke1; ?>">
                </div>
                <div class="form-group">
                  <label for="input_kolom_2">LABEL KOLOM 2</label>
                  <input type="text" class="form-control" id="input_kolom_2" name="input_kolom_2" value="<?php echo $contoh->kolom_ke2; ?>">
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