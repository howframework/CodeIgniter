<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_user extends CI_Model {

	var $table = 'users';
	var $max_idle_time = 300; // allowed idle time in secs, 300 secs = 5 minute

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
	// Save a new user. 
	function save( $user_data ) {
		$this->db->insert($this->table , $user_data); 
		return $this->db->insert_id();
	}
	
	// Update an existing user
	function update( $user_data ) {
		if (isset($user_data['id'])) {
			$this->db->where('id', $user_data['id'] );
			$this->db->update( $this->table , $user_data); 
			return $this->db->affected_rows();
		}
		return false;
	}
	
	// get user by username
	function get_by_username( $username ) {
		$query = $this->db->get_where($this->table, array('username' => $username), 1);
		if( $query->num_rows() > 0 ) return $query->row_array();
		return false;
	}
	
	// set login session
	function allow_pass( $user_data ) {
		$this->session->set_userdata( array( 'last_activity' => time(), 'logged_in' => 'yes', 'user' => $user_data ) );
	}
	
	// Check if user is logged in and update session
	function is_logged_in() {
		$last_activity = $this->session->userdata('last_activity');
		$logged_in = $this->session->userdata('logged_in');
		$user = $this->session->userdata('user');
		
		if ( ($logged_in == 'yes') 
		&& ((time() - $last_activity) < $this->max_idle_time )) {
			$this->allow_pass( $user );
			return true;
		} else {
			$this->remove_pass();
			return false;
		}
	}
	
	// remove pass
	function remove_pass() {
		$array_items = array('last_activity' => '', 'logged_in' => '', 'user' => '');
		$this->session->unset_userdata($array_items);
	}
	
	// get user by id
	function get_by_id( $id ) {
		$query = $this->db->get_where($this->table, array('id' => $id), 1);
		if( $query->num_rows() > 0 ) return $query->row_array();
		return false;
	}

	// Check if email address already exists
	function email_exists( $email ) {
		$query = $this->db->get_where($this->table, array('email' => $email), 1);
		if( $query->num_rows() > 0 ) return true;
		return false;
	}
	
	// Check if username already exists
	function username_exists( $username ) {
		$query = $this->db->get_where($this->table, array('username' => $username), 1);
		if( $query->num_rows() > 0 ) return true;
		return false;
	}

	// Generate hashed password
	function hash_password( $password ) {
		$salt = $this->generate_salt();
		return $salt.'.'.md5( $salt.$password);
	}
	
	// Check if password is valid
	function check_password( $password, $hashed_password ) {
		list($salt, $hash) = explode('.', $hashed_password);
		$hashed2 = $salt.'.'.md5( $salt.$password);
		return ($hashed_password == $hashed2);
	}
	
	// create salt for password hashing
	private function generate_salt( $length = 10 ) {
        $characterList = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $i = 0;
        $salt = "";
        while ($i < $length) {
            $salt .= $characterList{mt_rand(0, (strlen($characterList) - 1))};
            $i++;
        }
        return $salt;
	}
	
}

/* End of file m_user.php */
/* Location: ./application/models/m_user.php */