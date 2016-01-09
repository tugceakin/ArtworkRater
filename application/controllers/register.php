<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 5/3/15
 * Time: 1:08 AM
 */

class Register extends  CI_Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index() {
        $this->load->view('includes/header');
        $this->load->view('registration/view_register');
        $this->load->view('includes/footer');
    }

    public function register_user(){
        $this->load->model('model_register');

        $this->load->library('form_validation');

        //Rules to register
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[20]|is_unique[user.username]');
        $this->form_validation->set_rules('email', 'Email Address', 'trim|required|min_length[5]|max_length[50]|valid_email|is_unique[user.email]');
        $this->form_validation->set_rules('address', 'Address', 'min_length[5]|max_length[150]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[50]|matches[password_conf]');
        $this->form_validation->set_rules('password_conf', 'Confirmed Password', 'trim|required|min_length[3]|max_length[50]');

        if($this->form_validation->run() == FALSE){
            //user didn't validate, send back to form and show errors
            $this->load->view('includes/header');
            $this->load->view('registration/view_register');
            $this->load->view('includes/footer');

        }
        else{ //Successful registration

            $result = $this->model_register->insert_user();

            if($result){
                $this->load->view('includes/header');
                $this->load->view('registration/view_register_success', array('username' => $result));
                $this->load->view('includes/footer');
            }else{
                echo 'Sorry, there is problem with the website.';
            }


        }
    }

}