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

	function register()
	{
		$this->load->helper(array('form'));

		$this->load->library('form_validation');
		  // field name, error message, validation rules
		  $this->form_validation->set_rules('user_name', 'User Name', 'trim|required|min_length[4]|xss_clean');
		  $this->form_validation->set_rules('email_address', 'Your Email', 'trim|required|valid_email');
		  $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
		  $this->form_validation->set_rules('con_password', 'Password Confirmation', 'trim|required|matches[password]');

        if($this->form_validation->run() == FALSE)
		  {
		   $this->load->view('register');
		  }
		  else
		  {
		  	$this->load->model('user');
		   $this->user->add_user();
		   $this->load->view('login');
		  }
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */

