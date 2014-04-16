<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clogin extends CI_Controller {

	function __construct()
	 {
	   parent::__construct();
	 }

	public function index()
	{
		$this->load->helper(array('form'));
		$this->load->view('login');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

