<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Employee Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('employee/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Nama</th>
						<th>Email</th>
						<th>Telepon</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($employee as $e){ ?>
                    <tr>
						<td><?php echo $e['id']; ?></td>
						<td><?php echo $e['nama']; ?></td>
						<td><?php echo $e['email']; ?></td>
						<td><?php echo $e['telepon']; ?></td>
						<td>
                            <a href="<?php echo site_url('employee/edit/'.$e['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('employee/remove/'.$e['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
