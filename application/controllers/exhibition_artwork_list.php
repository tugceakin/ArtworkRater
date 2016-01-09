<?php
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 5/19/15
 * Time: 3:48 PM
 */

class Exhibition_artwork_list extends CI_Controller
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
        $this->load->model('model_exhibition');
        $exhb_id = $this->uri->segment(2, 0);

        $data['artworks'] = $this->model_exhibition->getArtworksOfExhibition($exhb_id);
        $this->load->view('view_exhibition_artwork_list', $data);

    }
}
