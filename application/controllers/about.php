<?php
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 5/19/15
 * Time: 3:31 PM
 */

class About extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    function index()
    {

        $this->load->view('includes/header');
        $this->load->view('view_about');
        $this->load->view('includes/footer');
    }

}
