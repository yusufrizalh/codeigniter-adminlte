<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Siswa Edit</h3>
            </div>
			<?php echo form_open('siswa/edit/'.$siswa['id']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="nis" class="control-label">Nis</label>
						<div class="form-group">
							<input type="text" name="nis" value="<?php echo ($this->input->post('nis') ? $this->input->post('nis') : $siswa['nis']); ?>" class="form-control" id="nis" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="nama" class="control-label">Nama</label>
						<div class="form-group">
							<input type="text" name="nama" value="<?php echo ($this->input->post('nama') ? $this->input->post('nama') : $siswa['nama']); ?>" class="form-control" id="nama" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="jenis_kelamin" class="control-label">Jenis Kelamin</label>
						<div class="form-group">
							<input type="text" name="jenis_kelamin" value="<?php echo ($this->input->post('jenis_kelamin') ? $this->input->post('jenis_kelamin') : $siswa['jenis_kelamin']); ?>" class="form-control" id="jenis_kelamin" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="telp" class="control-label">Telp</label>
						<div class="form-group">
							<input type="text" name="telp" value="<?php echo ($this->input->post('telp') ? $this->input->post('telp') : $siswa['telp']); ?>" class="form-control" id="telp" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="alamat" class="control-label">Alamat</label>
						<div class="form-group">
							<textarea name="alamat" class="form-control" id="alamat"><?php echo ($this->input->post('alamat') ? $this->input->post('alamat') : $siswa['alamat']); ?></textarea>
						</div>
					</div>
				</div>
			</div>
			<div class="box-footer">
            	<button type="submit" class="btn btn-success">
					<i class="fa fa-check"></i> Save
				</button>
	        </div>				
			<?php echo form_close(); ?>
		</div>
    </div>
</div>