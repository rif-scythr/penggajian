<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title?></title>
	<style type="text/css">
		body{
			font-family: Arial;
			color: black;
		}
	</style>
</head>
<body>
	<center>
		<h1>Rumah Sakit Khusus Jiwa Dharmawangsa</h1>
		<h2>Daftar Gaji Pegawai</h2>
		<hr style="width: 50%; border-width: 5px; color: black">
	</center>

	<?php foreach($potongan as $p) {
	$potongan=$p->jml_potongan;
	} ?>
	<?php foreach($bpjs4 as $b4) : {
	$bpjs4 = $b4->jml_potongan;
	} ?>
	<?php foreach($jht424 as $j4) : {
	$jht424 = $j4->jml_potongan;
	} ?>
	<?php foreach($jp2 as $jp2) : {
	$jp2 = $jp2->jml_potongan;
	} ?>	
	<?php foreach($bpjs1 as $b1) : {
	$bpjs1 = $b1->jml_potongan;
	} ?>
	<?php foreach($jht2 as $j2) : {
	$jht2 = $j2->jml_potongan;
	} ?>
	<?php foreach($jp1 as $jp1) : {
	$jp1 = $jp1->jml_potongan;
	} ?>	
	<?php foreach($cdt as $cdt) : {
	$cdt = $cdt->jml_potongan;
	} ?>
	<?php foreach($keterlambatan as $kt) : {
	$kt = $kt->jml_potongan;
	} ?>
	<?php foreach($koperasi as $kp) : {
	$kp = $kp->jml_potongan;
	} ?>
	<?php foreach($pengobatan as $po) : {
	$po = $po->jml_potongan;
	} ?>
		

	<?php foreach($print_slip as $ps) : ?>

	<?php $potongan_gaji=$ps->alpha * $potongan - bpjs4 * $bpjs4 - jht424 * $jht424 - jp2 * $jp2 - bpjs1 * $bpjs1 - jht2 * $jht2 - jp1 * $jp1 - cdt * $cdt - keterlambatan * $keterlambatan - koperasi * $koperasi - pengobatan * $pengobatan; ?>

	<table style="width: 100%">
		<tr>
			<td width="20%">Nama Pegawai</td>
			<td width="2%">:</td>
			<td><?php echo $ps->nama_pegawai?></td>
		</tr>
		<tr>
			<td>NIK</td>
			<td>:</td>
			<td><?php echo $ps->nik?></td>
		</tr>
		<tr>
			<td>Jabatan</td>
			<td>:</td>
			<td><?php echo $ps->nama_jabatan?></td>
		</tr>
		<tr>
			<td>Bulan</td>
			<td>:</td>
			<td><?php echo substr($ps->bulan, 0,2) ?></td>
		</tr>
		<tr>
			<td>Tahun</td>
			<td>:</td>
			<td><?php echo substr($ps->bulan, 2,4) ?></td>
		</tr>
	</table>

	<table class="table table-striped table-bordered mt-3">
		<tr>
			<th class="text-center" width="5%">No</th>
			<th class="text-center" >Keterangan</th>
			<th class="text-center" >Jumlah</th>
		</tr>
		<tr>
			<td>1</td>
			<td>Gaji Pokok</td>
			<td>Rp. <?php echo number_format($ps->gaji_pokok,0,',','.') ?></td>
		</tr>

		<tr>
			<td>2</td>
			<td>Tunjangan Transportasi</td>
			<td>Rp. <?php echo number_format($ps->tj_transport,0,',','.') ?></td>
		</tr>

		<tr>
			<td>3</td>
			<td>Uang Makan</td>
			<td>Rp. <?php echo number_format($ps->uang_makan,0,',','.') ?></td>
		</tr>

		<tr>
			<td>4</td>
			<td>Potongan</td>
			<td>Rp. <?php echo number_format($potongan_gaji,0,',','.') ?></td>
		</tr>

		<tr>
			<th colspan="2" style="text-align: right;">Total Gaji : </th>
			<th>Rp. <?php echo number_format($ps->gaji_pokok+$ps->tj_transport+$ps->uang_makan-$potongan_gaji,0,',','.') ?></th>
		</tr>
	</table>

	<table width="100%">
		<tr>
			<td></td>
			<td>
				<p>Pegawai</p>
				<br>
				<br>
				<p class="font-weight-bold"><?php echo $ps->nama_pegawai?></p>
			</td>

			<td width="200px">
				<p>Jakarta, <?php echo date("d M Y")?> <br> Direktur Rumah Sakit,</p>
				<br>
				<br>
				<p>DR.dr.Enrico A. Rinaldi, MARS, MM.</p>
			</td>
		</tr>
	</table>

	<?php endforeach ;?>

</body>
</html>

<script type="text/javascript">
	window.print();
</script>