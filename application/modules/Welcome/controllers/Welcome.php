<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent:: __construct();
        $this->load->model('M_tambah');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('encrypt');
	}
	public function index()
	{
		$data = array(
			'title' => 'Tryptonesia', 
			'modals' => 'modals', 
			'content' => 'homepage',
			'status_user' => $this->session->userdata('status_user'),
			'logged_in' => $this->session->userdata('logged_in'),
		);
		$this->load->view('template',$data);
	}
	public function Logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
	public function Authentication()
	{
		echo '<div class="row">
			    <div class="col-md-12">
			        <!-- Nav tabs -->
			        <ul class="nav nav-tabs">
			            <li class="active"><a href="#Login" data-toggle="tab">Masuk</a></li>
			            <li><a href="#Registration" data-toggle="tab">Daftar</a></li>
			        </ul>
			        <!-- /Nav tabs -->

			        <!-- Tab panes -->
			        <div class="tab-content">
			            <!-- Tab Login -->
			            <div class="tab-pane active" id="Login">                        
			                <div class="form-top">
			                    <div class="form-top-left">
			                        <h3>Masuk</h3>
			                    </div>
			                    <div class="form-top-right">
			                        <i class="fa fa-key"></i>
			                    </div>
			                </div>
			                <div class="form-bottom">
			                    <form action="'.base_url().'Auth/Welcome/checklogin" method="post" class="login-form">
			                        <div class="form-group">
			                            <label class="sr-only" for="form-email">Email</label>
			                            <input type="email" name="form-email" placeholder="Email..." class="form-first-name form-control" id="form-username">
			                        </div>
			                        <div class="form-group">
			                            <label class="sr-only" for="form-password">Password</label>
			                            <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
			                        </div>
			                        <button type="submit" class="btn btn-primary">Mulai!!</button>
			                    </form>
			                </div>                                                                  
			            </div>
			            <!-- /Tab Login -->
			            <!-- Tab Register -->
			            <div class="tab-pane" id="Registration">
			                <div class="form-top">
			                    <div class="form-top-left">
			                        <h3>Daftar</h3>
			                    </div>
			                    <div class="form-top-right">
			                        <i class="fa fa-pencil"></i>
			                    </div>
			                </div>
			                <div class="form-bottom">
			                    <form role="form" action="'.base_url().'Auth/Welcome/addUser" method="post" class="registration-form">
			                        <input type="hidden" name="role_id" value="Jlk15YGoh6PKqa+4zwKsh1VW9MdmWO7hDbPLTMLrA6GGSa74gILb5N4Yw87QI2ondQ6e6qp4peTemk53IGrbbQ==">
			                        <div class="form-group">
			                            <label class="sr-only" for="form-email">Email</label>
			                            <input type="email" name="form-email" placeholder="Email..." class="form-first-name form-control" id="form-email">
			                        </div>
			                        <div class="form-group">
			                            <label class="sr-only" for="form-first-password">Password</label>
			                            <input type="password" name="form-first-password" placeholder="Password" class="form-first-name form-control" id="form-first-name">
			                        </div>
			                        <div class="form-group">
			                            <label class="sr-only" for="form-second-password">Ulangi Password</label>
			                            <input type="password" name="form-second-password" placeholder="Ulangi Password" class="form-last-name form-control" id="form-last-name">
			                        </div>                                                                
			                        <button type="submit" class="btn">Daftar Sekarang!</button>
			                    </form>
			                </div>
			            </div>
			            <!-- Tab Register -->
			        </div>
			    </div>                                
			</div>';
	}
	public function Verify()
	{
		$this->load->view('Verifikasi-identitas');		
	}
	public function Konfirmasi_Transfer()
	{
		$this->load->view('Konfirmasi-Transfer');
	}
}
