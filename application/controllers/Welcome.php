<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		//load permisalahn
		$this->load->view('welcome_message');
	}
}
