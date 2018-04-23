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
		$breadcrumb = array('<li><a href="#">Home</a></li>','<li class="active">Dashboard</li>');
		$data = array(
			'title' => 'Tryptonesia', 
			'modals' => 'modals', 
			'content' => 'content/dashboard',
			'scripts' => 'scripts/dashboard',
			'breadcrumb' => $breadcrumb,
			'logged_in' => $this->session->userdata('logged_in'),
		);
		$this->load->view('template-admin',$data);
	}
	public function Logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
	public function Data_Tables()
	{
		$breadcrumb = array('<li><a href="#">Home</a></li>','<li class="active">Dashboard</li>');
		$page_title = '<!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-arrow-circle-o-left"></span> Verifikasi Identitas</h2>
                </div>
                <!-- END PAGE TITLE -->';
		$data = array(
			'title' => 'Tryptonesia', 
			'modals' => 'modals', 
			'content' => 'content/data-tables',
			'scripts' => 'scripts/data-tables',
			'breadcrumb' => $breadcrumb,
			'page_title' => $page_title,
			'logged_in' => $this->session->userdata('logged_in'),
		);
		$this->load->view('template-admin',$data);
	}
	public function Identity_Verification()
	{
		$breadcrumb = array('<li><a href="#">Home</a></li>','<li><a href="#">Pages</a></li>','<li class="active">Address Book</li>');
		$page_title = '<!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-users"></span> Address Book <small>139 contacts</small></h2>
                </div>
                <!-- END PAGE TITLE -->';
		$data = array(
			'title' => 'Tryptonesia', 
			'modals' => 'modals', 
			'content' => 'content/identity-verification',
			'scripts' => 'scripts/identity-verification',
			'breadcrumb' => $breadcrumb,
			'page_title' => $page_title,
			'logged_in' => $this->session->userdata('logged_in'),
		);
		$this->load->view('template-admin',$data);
	}
	public function galeri()
	{
		$breadcrumb = array('<li><a href="#">Home</a></li>','<li><a href="#">Pages</a></li>','<li class="active">Address Book</li>');
		$page_title = '<!-- PAGE TITLE -->
                <div class="page-title">                    
                    <h2><span class="fa fa-users"></span> Account Verification <small>139 Investor</small></h2>
                </div>
                <!-- END PAGE TITLE -->';
		$data = array(
			'title' => 'Tryptonesia', 
			'modals' => 'modals', 
			'content' => 'content/galeri',
			'scripts' => 'scripts/identity-verification',
			'breadcrumb' => $breadcrumb,
			'page_title' => $page_title,
			'logged_in' => $this->session->userdata('logged_in'),
		);
		$this->load->view('template-admin',$data);
	}
	
}
