<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 5/6/15
 * Time: 1:53 PM
 */

class Model_login extends CI_Model {

    public function login_user(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $sql = "SELECT username, user_type, email, address, password, activated FROM user WHERE username='{$username}' LIMIT 1";
        $result = $this->db->query($sql);
        $row = $result->row();

        if($result->num_rows()===1){

                if($row->password === sha1($this->config->item('salt').$password)){

                    $session_data = array(
                        'username' => $row->username,
                        'user_type' => $row->user_type,
                        'email' => $row->email,
                        'address' => $row->address
                    );
                    $this->set_session($session_data);
                    return 'logged_in';
                }else{
                    return 'incorrect_password';
                }

        }else{
            return 'email_not_found';
        }
    }

    //Save the session data to keep user logged in and save the user's information.
    private function set_session($session_data){
        $ses_data = array(
            'username' => $session_data['username'],
            'user_type' => $session_data['user_type'],
            'email' => $session_data['email'],
            'address' => $session_data['address'],
            'logged_in' => 1
        );
        $this->session->set_userdata($ses_data);
    }
}