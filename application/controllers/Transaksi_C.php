<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_C extends CI_Controller {

	public function index()
	{
		$this->load->view('transaksi');
    }
}