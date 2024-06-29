<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
  </div>

</div>
<!-- /.container-fluid -->

<div class="card" style="width: 60% ; margin-bottom: 100px">
	<div class="card-body">
		<form method="POST" action="<?php echo base_url('admin/data_pegawai/tambah_data_aksi')?>" enctype="multipart/form-data">
			
			<div class="form-group">
				<label>NIK</label>
				<input type="number" name="nik" class="form-control">
				<?php echo form_error('nik', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Nama Pegawai</label>
				<input type="text" name="nama_pegawai" class="form-control">
				<?php echo form_error('nama_pegawai', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" class="form-control">
				<?php echo form_error('username', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" class="form-control">
				<?php echo form_error('password', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Jenis Kelamin</label>
				<select name="jenis_kelamin" class="form-control">
					<option value="">--Pilih Jenis Kelamin--</option>
					<option value="Laki-Laki">Laki-Laki</option>
					<option value="Perempuan">Perempuan</option>
				</select>
				<?php echo form_error('jenis_kelamin', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Jabatan</label>
				<select name="jabatan" class="form-control">
					<option value="">--Pilih Jabatan--</option>
					<?php foreach($jabatan as $j) :?>
					<option value="<?php echo $j->nama_jabatan ?>"><?php echo $j->nama_jabatan ?></option>
					<?php endforeach; ?>
				</select>
			</div>

			<div class="form-group">
				<label>Tanggal Masuk</label>
				<input type="date" name="tanggal_masuk" class="form-control">
				<?php echo form_error('tanggal_masuk', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Status</label>
				<select name="status" class="form-control">
					<option value="">--Pilih Status--</option>
					<option value="Karyawan Tetap">Karyawan Tetap</option>
					<option value="Karyawan Tidak Tetap">Karyawan Tidak Tetap</option>
					<option value="Karyawan Paruh Waktu">Karyawan Paruh Waktu</option>
				</select>
				<?php echo form_error('status', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Hak Akses</label>
				<select name="hak_akses" class="form-control">
					<option value="">--Pilih Hak Akses--</option>
					<option value="1">Admin</option>
					<option value="2">Pegawai</option>
				</select>
			</div>

			<div class="form-group">
				<label>Status Nakes</label>
				<select name="statkes" class="form-control">
					<option value="">--Pilih Status Nakes--</option>
					<option value="Tenaga Kesehatan">Tenaga Kesehatan</option>
					<option value="Tenaga Kesehatan Lainnya">Tenaga Kesehatan Lainnya</option>
					<option value="Non Tenaga Kesehatan">Non Tenaga Kesehatan</option>
				</select>
				<?php echo form_error('statkes', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Nomor SIP</label>
				<input type="text" name="no_sip" class="form-control">
				<?php echo form_error('no_sip', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Status Nakes</label>
				<select name="last_edu" class="form-control">
					<option value="">--Pilih Pendidikan Terakhir--</option>
					<option value="SD">SD/Sederajat</option>
					<option value="SMP">SMP/Sederajat</option>
					<option value="SMA">SMA/Sederajat</option>
					<option value="D3">Diploma 3</option>
					<option value="D4">Diploma 4</option>
					<option value="S1">Strata 1</option>
					<option value="S2">Strata 2</option>
					<option value="S3">Strata 3</option>
				</select>
				<?php echo form_error('last_edu', '<div class="text-small text-danger"> </div>')?>
			</div>

			<div class="form-group">
				<label>Photo</label>
				<input type="file" name="photo" class="form-control">
			</div>


			<button type="submit" class="btn btn-success" >Simpan</button>
			<button type="reset" class="btn btn-danger" >Reset</button>
			<a href="<?php echo base_url('admin/data_pegawai')?>" class="btn btn-warning">Kembali</a>

		</form>
	</div>
</div>