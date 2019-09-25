<div class="row">
    <div class="col-md-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Siswa Listing</h3>
            	<div class="box-tools">
                    <a href="<?php echo site_url('siswa/add'); ?>" class="btn btn-success btn-sm">Add</a> 
                </div>
            </div>
            <div class="box-body">
                <table class="table table-striped">
                    <tr>
						<th>ID</th>
						<th>Nis</th>
						<th>Nama</th>
						<th>Jenis Kelamin</th>
						<th>Telp</th>
						<th>Alamat</th>
						<th>Actions</th>
                    </tr>
                    <?php foreach($siswa as $s){ ?>
                    <tr>
						<td><?php echo $s['id']; ?></td>
						<td><?php echo $s['nis']; ?></td>
						<td><?php echo $s['nama']; ?></td>
						<td><?php echo $s['jenis_kelamin']; ?></td>
						<td><?php echo $s['telp']; ?></td>
						<td><?php echo $s['alamat']; ?></td>
						<td>
                            <a href="<?php echo site_url('siswa/edit/'.$s['id']); ?>" class="btn btn-info btn-xs"><span class="fa fa-pencil"></span> Edit</a> 
                            <a href="<?php echo site_url('siswa/remove/'.$s['id']); ?>" class="btn btn-danger btn-xs"><span class="fa fa-trash"></span> Delete</a>
                        </td>
                    </tr>
                    <?php } ?>
                </table>
                                
            </div>
        </div>
    </div>
</div>
