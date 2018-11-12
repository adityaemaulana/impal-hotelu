<?php

	class C_Akun extends CI_Controller{
			public function __construct(){
				parent:: __construct();
				$this->load->model(M_Akun);
			}
			
			public function index(){
				$data = array(
					'title' => 'Login To hotelu',
					'filename' => 'Login'
				);
				$this->load->view('Login',$data);
			}
			
			public function check(){
				$data = $this->input->post(null,TRUE);
				$login = $this->M_Login->check($data);
				if ($login){
					$this->session->set_userdata('email',$login->email);
					redirect('C_Akun/index')
				} else{
					$this->session->set_flashdata('message','Error Login');
					redirect('C_Akun/index')
				}
			}
			
			public function logout(){
				$this->session->sess_destroy();
				redirect('C_Akun/index')
			}
			
	}	

?>