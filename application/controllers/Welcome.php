<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	public function index()
	{
		$data['title']   = 'Dashboard | A C PABjn';
		$data['tanggal'] = date('Y-m-d');
		$data['tahun']	 = $this->db->query('SELECT YEAR(tglPendaftaran) AS tahun_baru FROM dataumumweb GROUP BY tahun_baru DESC')->result_array();

		$cari_perkara    = $this->input->post('nomor') . '/' . $this->input->post('jenis_perkara') . '/' . $this->input->post('tahun') . '/' . $this->input->post('nama_pa');
		// $cari_perkara	 = $this->input->post('nomor');

		$this->form_validation->set_rules('nomor', 'Nomor Perkara', 'required', ['required' => 'Nomor Perkara Wajib Diisi !!!']);

		if ($this->form_validation->run() == FALSE) {

			$this->session->set_flashdata('pesan', 'Nomor Perkara Wajib Diisi !!!');

			$this->load->view('v_search', $data);
		} else {

			$data['laporan'] = $this->db->get_where('dataumumweb', array('noPerkara' => $cari_perkara))->result_array();

			$this->load->view('v_tampil-search', $data);
		}
	}
}
