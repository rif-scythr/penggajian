<div class="container-fluid">
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><?php echo $title?></h1>
  </div>

  <div class="card mb-3">
  <div class="card-header bg-primary text-white">
    Filter Data Gaji Pegawai
  </div>
  <div class="card-body">
    <form class="form-inline">
	  <div class="form-group mb-2">
	    <label for="staticEmail2">Bulan</label>
	    <select class="form-control ml-3" name="bulan">
		    <option value=""> Pilih Bulan </option>
		    <option value="01">Januari</option>
		    <option value="02">Februari</option>
		    <option value="03">Maret</option>
		    <option value="04">April</option>
		    <option value="05">Mei</option>
		    <option value="06">Juni</option>
		    <option value="07">Juli</option>
		    <option value="08">Agustus</option>
		    <option value="09">September</option>
		    <option value="10">Oktober</option>
		    <option value="11">November</option>
		    <option value="12">Desember</option>
	    </select>
	  </div>
	  <div class="form-group mb-2 ml-5">
	    <label for="staticEmail2">Tahun</label>
	    <select class="form-control ml-3" name="tahun">
		    <option value=""> Pilih Tahun </option>
		    <?php $tahun = date('Y');
		    for($i=2020;$i<$tahun+5;$i++) { ?>
		    <option value="<?php echo $i ?>"><?php echo $i ?></option>
		<?php }?>
		</select>
	  </div>

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

	  <button type="submit" class="btn btn-primary mb-2 ml-auto"><i class="fas fa-eye"></i> Tampilkan Data</button>

	  <?php if(count($gaji) > 0 ) { ?>
	  	<a href="<?php echo base_url('admin/data_penggajian/cetak_gaji?bulan='.$bulan),'&tahun='.$tahun?>" class="btn btn-success mb-2 ml-3"><i class="fas fa-print"></i> Cetak Daftar Gaji</a>
	  <?php }else{ ?>
	  	<button type="button" class="btn btn-success mb-2 ml-3" data-toggle="modal" data-target="#exampleModal">
	  	<i class="fas fa-print"></i> Cetak Daftar Gaji</button>
	<?php } ?>

	</form>
  </div>
</div>
</div>
	
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

	<div class="alert alert-info">
		Menampilkan Data Gaji Pegawai Bulan: <span class="font-weight-bold"><?php echo $bulan ?></span> Tahun: <span class="font-weight-bold"><?php echo $tahun ?></span>
	</div>

	<?php

	$jml_data = count($gaji);
	if($jml_data > 0 ) { ?>

		<div class="container-fluid">
		  <div class="card shadow mb-4">
		   <div class="card-body">
		     <div class="table-responsive">
		       <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		         <thead class="thead-dark">
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
						<th class="text-center">BPJS Kes 4%</th>
						<th class="text-center">JHT 4,24%</th>
						<th class="text-center">JP 2%</th>
						<th class="text-center">BPJS Kes 1%</th>
						<th class="text-center">JHT 2%</th>
						<th class="text-center">JP 1%</th>
						<th class="text-center">CDT</th>
						<th class="text-center">Keterlambatan</th>
						<th class="text-center">Koperasi</th>
						<th class="text-center">Pengobatan Pegawai</th>
						<th class="text-center">Total Gaji</th>
		           </tr>
		         </thead>
		         <tbody>
		           <?php foreach($potongan as $p) : {
					   $alpha = $p->jml_potongan;
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
					<?php $no=1; foreach($gaji as $g) : ?>
					<?php $potongan = $g->alpha * $alpha ?>
					<?php $b4 = $g->bpjs4 * $bpjs4 ?>
					<?php $j4 = $g->jht424 * $jht424 ?>
					<?php $jp2 = $g->jp2 * $jp2 ?>
					<?php $b1 = $g->bpjs1 * $bpjs1 ?>
					<?php $j2 = $g->jht2 * $jht2 ?>
					<?php $jp1 = $g->jp1 * $jp1 ?>
					<?php $cdt = $g->cdt * $cdt ?>
					<?php $kt = $g->keterlambatan * $keterlambatan ?>
					<?php $kp = $g->koperasi * $koperasi ?>
					<?php $po = $g->pengobatan * $pengobatan ?>
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
						<td class="text-center">Rp. <?php echo number_format($b4,0, ',','.') ?></td>
						<td class="text-center">Rp. <?php echo number_format($j4,0, ',','.') ?></td>
						<td class="text-center">Rp. <?php echo number_format($jp1,0, ',','.') ?></td>
						<td class="text-center">Rp. <?php echo number_format($b1,0, ',','.') ?></td>
						<td class="text-center">Rp. <?php echo number_format($j2,0, ',','.') ?></td>
						<td class="text-center">Rp. <?php echo number_format($jp1,0, ',','.') ?></td>
						<td class="text-center">Rp. <?php echo number_format($cdt,0, ',','.') ?></td>
						<td class="text-center">Rp. <?php echo number_format($kt,0, ',','.') ?></td>
						<td class="text-center">Rp. <?php echo number_format($kp,0, ',','.') ?></td>
						<td class="text-center">Rp. <?php echo number_format($po,0, ',','.') ?></td>
						<td class="text-center">Rp. <?php echo number_format($g->gaji_pokok + $g->tj_transport + $g->uang_makan - $potongan -$b4 - $j4 -$jp2 - $b1 - $j2 - $jp1 - $cdt - $kt - $kp - $po,0,',','.') ?></td>
					</tr>
		            </tr>
		         	<?php endforeach ;?>
					<?php endforeach ;?>
					<?php endforeach ;?>
					<?php endforeach ;?>
					<?php endforeach ;?>
					<?php endforeach ;?>
					<?php endforeach ;?>
					<?php endforeach ;?>
					<?php endforeach ;?>
					<?php endforeach ;?>
					<?php endforeach ;?>
					<?php endforeach ;?>
		         </tbody>
		       </table>
		     </div>
		   </div>
		  </div>
		</div>
		<?php }else { ?>
	<span class="badge badge-danger"><i class="fas fa-info-circle"></i> Data absensi kosong, silakan input data kehadiran pada bulan dan tahun yang anda pilih</span>
<?php } ?>
	</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Data gaji masih kosong, silahkan input absensi terlebih dahulu pada bulan dan tahun yang Anda pilih.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>