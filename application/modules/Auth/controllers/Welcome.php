<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	public function __construct(){
		parent:: __construct();
        $this->load->model('M_tambah');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('encrypt');
	}
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function addUser()
	{
		$data_user = array(
			'email' => $this->input->post('form-email'),
		);
		$result = $this->M_tambah->select_where('tb_user',$data_user,'email','ASC')->row();
		
		if (count($result) == 0) {
			$data = array(
				'id_user' => $this->M_tambah->kode_unik('tb_user','id_user',9,'ID'), 
				'email' => $this->input->post('form-email'), 
				'encrypted_password' => $this->encrypt->encode($this->input->post('form-first-password')), 
				'created_at' => date("Y-m-d h:i:s"), 
				'role_id' => $this->encrypt->decode($this->input->post('role_id')), 
			);
			$insert = $this->M_tambah->insert('tb_user',$data);
			if ($insert > 0) {
				$flashdata = array(
					'title' => 'Pendaftaran berhasil', 
					'text' => 'Cek kotak masuk atau spam pada email anda untuk melakukan aktivasi', 
					'type' => 'success', 
					'styling' => 'bootstrap3', 
				);
			}else{
				$flashdata = array(
					'title' => 'Pendaftaran belum berhasil', 
					'text' => 'Silahkan ulangi pendaftaran', 					 
					'styling' => 'bootstrap3', 
				);
			}
		}else{
			$flashdata = array(
				'title' => 'Pendaftaran Gagal', 
				'text' => 'Email anda sudah terdaftar', 
				'type' => 'error', 
				'styling' => 'bootstrap3', 
			);
		}

		$this->session->set_flashdata($flashdata);
		redirect(base_url());
	}
	public function checklogin()
	{
		$password = $this->input->post('form-password');
		$data = array(
			'email' => $this->input->post('form-email'),
		);
		$result = $this->M_tambah->select_where('tb_user',$data,'email','ASC')->row();
		$result_password = $this->encrypt->decode($result->encrypted_password);
		if (count($result) == 0) {
			$flashdata = array(
			'title' => 'Mohon Maaf Anda Gagal Masuk !!!', 
			'text' => 'email kamu belum terdaftar, silahkan daftar terlebih dulu', 
			'type' => 'error', 
			'styling' => 'bootstrap3', 
			);
		}
		elseif ($password == $result_password) {
			$flashdata = array(
				'title' => 'Selamat !!!', 
				'text' => 'Anda Berhasil Masuk', 
				'type' => 'success', 
				'styling' => 'bootstrap3', 
			);
			$array_items = array(
                'logged_in' => true,
				'status_user' => 0,
			);
			$this->session->set_userdata($array_items);
		}else if($password != $result_password){
			$flashdata = array(
			'title' => 'Mohon Maaf Anda Gagal Masuk !!!', 
			'text' => 'Password anda salah', 
			'type' => 'error', 
			'styling' => 'bootstrap3', 
			);
		}
		$this->session->set_flashdata($flashdata);
		redirect(base_url());
	}

	public function Authentication()
	{
		echo '<div class="row">
                    <div class="col-md-8" style="border-right: 1px dotted #C2C2C2;padding-right: 30px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#Login" data-toggle="tab">Login</a></li>
                            <li><a href="#Registration" data-toggle="tab">Registration</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="Login">
                                <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email1" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            Submit</button>
                                        <a href="javascript:;">Forgot your password?</a>
                                    </div>
                                </div>
                                </form>
                            </div>
                            <div class="tab-pane" id="Registration">
                                <form role="form" class="form-horizontal">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Name</label>
                                    <div class="col-sm-10">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <select class="form-control">
                                                    <option>Mr.</option>
                                                    <option>Ms.</option>
                                                    <option>Mrs.</option>
                                                </select>
                                            </div>
                                            <div class="col-md-9">
                                                <input type="text" class="form-control" placeholder="Name" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">
                                        Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="mobile" class="col-sm-2 control-label">
                                        Mobile</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="mobile" placeholder="Mobile" />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-sm-2 control-label">
                                        Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" placeholder="Password" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-2">
                                    </div>
                                    <div class="col-sm-10">
                                        <button type="button" class="btn btn-primary btn-sm">
                                            Save & Continue</button>
                                        <button type="button" class="btn btn-default btn-sm">
                                            Cancel</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div id="OR" class="hidden-xs">
                            OR</div>
                    </div>
                    <div class="col-md-4">
                        <div class="row text-center sign-with">
                            <div class="col-md-12">
                                <h3>
                                    Sign in with</h3>
                            </div>
                            <div class="col-md-12">
                                <div class="btn-group btn-group-justified">
                                    <a href="#" class="btn btn-primary">Facebook</a> <a href="#" class="btn btn-danger">
                                        Google</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
	}

}
