<?php

class Data_Absensi extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('hak_akses') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				<strong>Anda Belum Login!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
				redirect('login');
		}
	}
	
	public function index() 
	{
		$data['title'] = "Data Absensi Pegawai";

		if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
			$bulan = $_GET['bulan'];
			$tahun = $_GET['tahun'];
			$bulantahun = $bulan.$tahun;
		}else{
			$bulan = date('m');
			$tahun = date('Y');
			$bulantahun = $bulan.$tahun;
		}

		$data['absensi'] = $this->db->query("SELECT data_kehadiran.*, data_pegawai.nama_pegawai, data_pegawai.jenis_kelamin, data_pegawai.jabatan
			FROM data_kehadiran
			INNER JOIN data_pegawai ON data_kehadiran.nik= data_pegawai.nik
			INNER JOIN data_jabatan ON data_pegawai.jabatan = data_jabatan.nama_jabatan
			WHERE data_kehadiran.bulan='$bulantahun' ORDER BY data_pegawai.nama_pegawai ASC")->result();

		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/absensi/data_absensi', $data);
		$this->load->view('template_admin/footer');
	}

	public function input_absensi()
	{
		if($this->input->post('submit', TRUE) == 'submit') {
			$post = $this->input->post();

			foreach ($post['bulan'] as $key => $value) {
				if($post['bulan'][$key] !='' || $post['nik'][$key] !='')
				{
					$simpan[] = array(
						'bulan'			=> $post['bulan'][$key],
						'nik'			=> $post['nik'][$key],
						'nama_pegawai'	=> $post['nama_pegawai'][$key],
						'jenis_kelamin'	=> $post['jenis_kelamin'][$key],
						'nama_jabatan'	=> $post['nama_jabatan'][$key],
						'hadir'			=> $post['hadir'][$key],
						'sakit'			=> $post['sakit'][$key],
						'alpha'			=> $post['alpha'][$key],
						'bpjs4'			=> $post['bpjs4'][$key],
						'jht424'		=> $post['jht424'][$key],
						'jp2'			=> $post['jp2'][$key],
						'bpjs1'			=> $post['bpjs1'][$key],
						'jht2'			=> $post['jht2'][$key],
						'jp1'			=> $post['jp1'][$key],
						'cdt'			=> $post['cdt'][$key],
						'keterlambatan'	=> $post['keterlambatan'][$key],
						'koperasi'		=> $post['koperasi'][$key],
						'pengobatan'	=> $post['pengobatan'][$key],
					);
				}
			}
			$this->ModelPenggajian->insert_batch('data_kehadiran', $simpan);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Data berhasil ditambahkan!</strong>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('admin/data_absensi');

		}

		$data['title'] = "Form Input Absensi";

		if((isset($_GET['bulan']) && $_GET['bulan']!='') && (isset($_GET['tahun']) && $_GET['tahun']!='')){
			$bulan = $_GET['bulan'];
			$tahun = $_GET['tahun'];
			$bulantahun = $bulan.$tahun;
		}else{
			$bulan = date('m');
			$tahun = date('Y');
			$bulantahun = $bulan.$tahun;
		}
		$data['input_absensi'] = $this->db->query("SELECT data_pegawai.*, data_jabatan.nama_jabatan FROM data_pegawai
			INNER JOIN data_jabatan ON data_pegawai.jabatan = data_jabatan.nama_jabatan
			WHERE NOT EXISTS (SELECT * FROM data_kehadiran WHERE bulan='$bulantahun' AND data_pegawai.nik=data_kehadiran.nik) ORDER BY data_pegawai.nama_pegawai ASC")->result();
		$this->load->view('template_admin/header', $data);
		$this->load->view('template_admin/sidebar');
		$this->load->view('admin/absensi/tambah_dataAbsensi', $data);
		$this->load->view('template_admin/footer');
	}
}
?>