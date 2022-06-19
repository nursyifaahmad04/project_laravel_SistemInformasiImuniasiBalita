<?php

namespace App\Http\Controllers;

use App\Models\ModelBalita;
use App\Models\M_Login;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\DB;

class Login extends Controller
{
    function __construct()
	{
	parent::__construct();
	$this->load->model('M_Login');
	}

	function index(){
		$this->load->view('login');
	}

	function auth(){
		$username = htmlspecialchars($this->input->post('username', TRUE), ENT_QUOTES);
		$password = htmlspecialchars($this->input->post('password', TRUE), ENT_QUOTES);
     
	$cek_admin = $this->M_Login->auth_admin($username, $password);
	if($cek_admin->num_rows() > 0){
		$data = $cek_admin->row_array();
		$this->session->set_userdata('masuk', TRUE);
		if($data['status']=='Administrator'){
			$this->session->set_userdata('akses', 'Administrator');
			$this->session->set_userdata('ses_id', $data['username']);
			$this->session->set_userdata('ses_nama', $data['nm_user']);
				redirect('Admin/dashboard_admin');

		}
		
	}else{
			$url=base_url();
			echo $this->session->set_flashdata('msg', '<button class="btn btn-danger btn-block">Oops.. Username & Password Salah!</button>');
			redirect($url);
		}
	

}
function logout(){
	$this->session->sess_destroy();
	$url=base_url('');
	redirect($url);
}
}