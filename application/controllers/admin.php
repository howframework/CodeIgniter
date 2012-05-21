<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
	var $data = array();

    function __construct()
    {
        // Call the Controller constructor
        parent::__construct();
		
		header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
		header("Cache-Control: no-store, no-cache, must-revalidate");
		header("Cache-Control: post-check=0, pre-check=0", false);
		header("Pragma: no-cache");		
		
		$this->load->model('m_user');
		
		if ($this->m_user->is_logged_in() === FALSE) { 
			$this->m_user->remove_pass();
			redirect('login/noaccess');
		} else {
			// is_logged_in also put user data in session
			$this->data['user'] = $this->session->userdata('user');
		}

    }

	public function index()
	{
		$this->load->view('admin/v_admin_home', $this->data);
	}
	

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */