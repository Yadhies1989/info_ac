<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testing extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Tampilan Awal';

		$this->load->view('v_tampilan_awal', $data);
	}

}