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
	</center>

	<?php
	if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
			$bulan = $_GET['bulan'];
			$tahun = $_GET['tahun'];
			$bulantahun = $bulan.$tahun;
		}else{
			$bulan = date('m');
			$tahun = date('Y');
			$bulantahun = $bulan.$tahun;
		}
	?>
	<table>
		<tr>
			<td>Bulan</td>
			<td>:</td>
			<td><?php echo $bulan?></td>
		</tr>
		<tr>
			<td>Tahunn</td>
			<td>:</td>
			<td><?php echo $tahun?></td>
		</tr>
	</table>
	<table class="table table-bordered table-triped">
			<tr>
				<th class="text-center">No</th>
				<th class="text-center">NIK</th>
				<th class="text-center">Nama Pegawai</th>
				<th class="text-center">Jenis Kelamin</th>
				<th class="text-center">Jabatan</th>
				<th class="text-center">GajI Pokok</th>
				<th class="text-center">Tj. Transport</th>
				<th class="text-center">Uang Makan</th>
				<th class="text-center">Potongan</th>
			</tr>
			<?php
			$no = 1; 
			foreach ($cetak_gaji as $g) : 
    		// Initialize $potongan
    		$potongan = 0;

    		// Iterate over $potongan array to accumulate values
    		foreach ($potongan as $p) {
       		$alpha = $p->jml_potongan;
        	$bpjs4 = $p->jml_potongan;
        	$jht424 = $p->jml_potongan;
        	$jp2 = $p->jml_potongan;
        	$bpjs1 = $p->jml_potongan;
        	$jht2 = $p->jml_potongan;
       		$jp1 = $p->jml_potongan;
       		$cdt = $p->jml_potongan;
    		$keterlambatan = $p->jml_potongan;
        	$koperasi = $p->jml_potongan;
        	$pengobatan = $p->jml_potongan;

        	// Accumulate values (you can adjust this based on your calculation)
        	$potongan += $g->alpha * $alpha;
        	$potongan += $g->bpjs4 * $bpjs4;
        	$potongan += $g->jht424 * $jht424;
        	$potongan += $g->jp2 * $jp2;
        	$potongan += $g->bpjs1 * $bpjs1;
        	$potongan += $g->jht2 * $jht2;
        	$potongan += $g->jp1 * $jp1;
        	$potongan += $g->cdt * $cdt;
        	$potongan += $g->keterlambatan * $keterlambatan;
        	$potongan += $g->koperasi * $koperasi;
        	$potongan += $g->pengobatan * $pengobatan;
    		}

    	// Output or use $potongan as needed
    	echo "Potongan for no. $no: $potongan<br>";

    	// Increment $no for the next iteration
    	$no++;
		endforeach; ?>
			<tr>
				<td class="text-center"><?php echo $no++ ?></td>
				<td class="text-center"><?php echo $g->nik ?></td>
				<td class="text-center"><?php echo $g->nama_pegawai ?></td>
				<td class="text-center"><?php echo $g->jenis_kelamin ?></td>
				<td class="text-center"><?php echo $g->nama_jabatan ?></td>
				<td class="text-center">Rp. <?php echo number_format($g->gaji_pokok,0,',','.') ?></td>
				<td class="text-center">Rp. <?php echo number_format($g->tj_transport,0,',','.') ?></td>
				<td class="text-center">Rp. <?php echo number_format($g->uang_makan,0,',','.') ?></td>
				<td class="text-center">Rp. <?php echo number_format($potongan,0, ',','.') ?></td>
				<td class="text-center">Rp. <?php echo number_format($g->gaji_pokok + $g->tj_transport + $g->uang_makan - $potongan,0,',','.') ?></td>
			</tr>
			
		
		</table>

		<table width="100%">
			<tr>
				<td></td>
				<td width="200px">
					<p>Jakarta, <?php echo date("d M Y") ?> <br> Direktur Rumah Sakit</p>
					<br>
					<br>
					<p>DR.dr.Enrico A. Rinaldi, MARS, MM</p>
				</td>
			</tr>
		</table>
</body>
</html>

<script type="text/javascript">
	window.print();
</script>