<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 5/6/15
 * Time: 12:07 PM
 */


class Model_register extends CI_Model {

    function __construct(){
        parent::__construct();
    }

    public function insert_user(){
        $username = $this->input->post('username');
        $email = $this->input->post('email');
        $address = $this->input->post('address');
        $password = sha1($this->config->item('salt').$this->input->post('password')); //Hash password for security.

        $sql = "INSERT INTO User (username, email, address, password )
                VALUES (".$this->db->escape($username).",
                        '".$email."',
                        ".$this->db->escape($address).",
                        '".$password."')";

        $result = $this->db->query($sql);

        if($this->db->affected_rows() === 1 ){
            $this->set_session($username, $email, $address);
            return $username;
        }
        else{
            return false;
        }
    }

    // Set session data of the registered user.
    public function set_session($username, $email, $address){
        $sql ="SELECT username FROM user WHERE email='".$email."' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();

        $ses_data = array(
            'username' => $row->username,
            'email' => $email,
            'address' => $address,
            'logged_in' => 0
        );

        $this->session->set_userdata($ses_data);
    }
}
