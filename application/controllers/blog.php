<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {
	var $data = array();

    function __construct()
    {
        // Call the Controller constructor
        parent::__construct();	

    }

	public function index()
	{
		$this->load->view('blog/v_blog_home');
	}
	

}

/* End of file blog.php */
/* Location: ./application/controllers/blog.php */