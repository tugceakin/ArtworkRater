<?php
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 5/6/15
 * Time: 1:00 PM
 */

class Login extends CI_Controller{
    private $logged_in;

    public function __construct(){
        parent::__construct();
        $this->load->model('model_login');
    }

    function index(){

        $this->load->view('includes/header');
        $this->load->view('login/view_login');
        $this->load->view('includes/footer');
    }

    public function login_user(){
        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[50]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[50]');

        if($this->form_validation->run() == FALSE){
            //redirect('login');
            $this->load->view('includes/header');
            $this->load->view('login/view_login');
            $this->load->view('includes/footer');
        }
        else{
            $result = $this->model_login->login_user();
            switch($result){
                case 'logged_in':

                    redirect('site');
                case 'incorrect_password':
                    /* $this->load->model("model_database");
                     $data['categories'] = $this->model_database->get_categories();
                     */
                    redirect('login');
                case 'not_activated':
                    /* $this->load->model("model_database");
                    $data['categories'] = $this->model_database->get_categories();
                    */
                    redirect('login');
                case 'email_not_found':
                    /* $this->load->model("model_database");
                    $data['categories'] = $this->model_database->get_categories();
                    */
                    redirect('login');
                    break;
            }
        }
    }

    public function login_validation(){

    }
}
