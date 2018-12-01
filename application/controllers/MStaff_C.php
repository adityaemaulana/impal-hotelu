<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MStaff_C extends CI_Controller {

	public function index()
	{
		$this->load->model('Staff_M');
		$data['data'] = $this->Staff_M->getData();
		$this->load->view('admin/staff_V', $data);
	}

	public function delete($id)
	{	
		$this->load->model('Staff_M');
		$this->Staff_M->delData($id);
		redirect('MStaff_C');
	}

	public function update($id)
	{
		$data = $this->input->post();
		$this->load->model("Staff_M");
		$this->Staff_M->upData($data, $id);
		redirect('MStaff_C');
	}

	public function input(){
		$data = $this->input->post();
		
		$this->rules();

		if($this->form_validation->run() == FALSE)
		{
			$this->load->model('Staff_M');
			$data = $this->Staff_M->getData();
			$this->load->view('admin/staff_V', array('error' => '', 'data' => $data));
		}else
		{
			$this->load->model('Staff_M');
			$this->Staff_M->input($data);
			redirect('MStaff_C');
		}
	}

	public function rules()
	{
		$this->form_validation->set_error_delimiters('<div style="font-color:#dc3545">', '</div>');

		$this->form_validation->set_message('required', '{field} tidak boleh kosong');
		$this->form_validation->set_message('min_length', '{field} tidak boleh kurang dari 6 karakter');

		$this->form_validation->set_rules('nama', 'Nama Pegawai', 'required|min_length[6]');
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[6]');
		$this->form_validation->set_rules('pass', 'Password', 'required|min_length[6]');
		$this->form_validation->set_rules('umur', 'Umur', 'required');
	}
}