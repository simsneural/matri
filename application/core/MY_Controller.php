<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends MX_Controller {

	function __construct()
    {
        parent :: __construct();
    }
	public function index()
	{
		$this->load->view('welcome_message');
	}
}
