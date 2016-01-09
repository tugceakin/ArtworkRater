<?php
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 5/6/15
 * Time: 3:10 PM
 */

class Logout extends CI_Controller{

    function index(){

        $this->load->model("model_logout");
        $this->model_logout->logout();
    }

}