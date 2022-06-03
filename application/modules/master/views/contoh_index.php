<div class="col-md-12 col-sm-12">
	<div class="card">
        <div class="card-body">
            <div class="table-responsive"> 
                <div class="table-wrapper">
                    <div class="table-title theme-bg">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Data Contoh</h2>
                            </div>
                            <div class="col-sm-6">
                                <a href="<?php echo $add; ?>" class="btn btn-success" data-toggle="modal"><i class="fa fa-user-plus" aria-hidden="true"></i> <span>Tambah</span></a>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-hover" id="mydatatables">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Label_Kolom_1</th>
                                <th>Label_Kolom_2</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php 
								$no = 1;
								foreach($grid as $record) :
							?>
                            <tr>
                                <td><?php echo $no; ?></td>
                                <td><?php echo $record->kolom_ke1; ?></td>
                                <td><?php echo $record->kolom_ke2; ?></td>
                                <td>
                                    <a href="<?php echo site_url('/master/contoh/edit/'.$record->tabel_id); ?>" class="edit" data-toggle="modal"><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit"></i></a>
                                    <a href="<?php echo site_url('/master/contoh/delete/'.$record->tabel_id); ?>" class="delete" data-toggle="modal"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a>
                                </td>
                            </tr>
                             <?php
							 	$no++;
							  endforeach;
							 ?>
                        </tbody>
                    </table>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('/themes/assets/plugins/jquery/dist/jquery.min.js'); ?>"></script>
<script type="text/javascript">
  $(document).ready( function () {
      $('#mydatatables').DataTable();
  } );
</script>