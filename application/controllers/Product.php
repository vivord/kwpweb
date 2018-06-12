<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}


	public function index()
	{
		$data['title']='Our Product';
		$data['pagetitle']= 'Our Product';
		$this->load->view('theme/header_page',$data);
		
		$this->load->view('product',$data);
		
		$this->load->view('theme/footer');
	}
}
