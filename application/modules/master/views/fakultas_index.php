<div class="col-md-12 col-sm-12">
	<div class="card">
        <div class="card-body">
            <div class="table-responsive"> 
                <div class="table-wrapper">
                    <div class="table-title theme-bg">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Data Fakultas</h2>
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
                                <th>Kode Fakultas</th>
                                <th>Nama Fakultas</th>
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
                                <td><?php echo $record->kode_fakultas; ?></td>
                                <td><?php echo $record->nama_fakultas; ?></td>
                                <td>
                                    <a href="<?php echo site_url('/master/fakultas/edit/'.$record->kode_fakultas); ?>" class="edit" data-toggle="modal"><i class="fa fa-pencil-square-o" data-toggle="tooltip" title="Edit"></i></a>
                                    <a href="<?php echo site_url('/master/fakultas/delete/'.$record->kode_fakultas); ?>" class="delete" data-toggle="modal"><i class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a>
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