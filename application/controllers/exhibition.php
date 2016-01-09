<?php
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 5/6/15
 * Time: 3:12 PM
 */

class Exhibition extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_exhibition');
    }

    function index()
    {

        $this->load->view('includes/header');
        $this->home();
        $this->load->view('includes/footer');
    }


    public function home(){
        $this->load->model('model_artworks');

        $data['exhibitions'] = $this->model_exhibition->getExhibitions();
        $this->load->view('view_exhibition', $data);

    }
}
