<?php
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 5/20/15
 * Time: 2:30 PM
 */
class Artist extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_artists');
    }

    function index()
    {
        $this->load->view('includes/header');
        $this->home();
        $this->load->view('includes/footer');
    }


    public function home(){

        $data['artists'] = $this->model_artists->getArtists();
        $data['favorites'] = $this->model_artists->getFavoriteArtists();
        $this->load->view('view_artists', $data);
    }

    public function add_favorite(){
        $this->model_artists->addFavorite();
        $segments = array('artist');
        redirect($segments);
    }

    public function remove_favorite(){
        $this->model_artists->removeFavorite();
        $segments = array('artist');
        redirect($segments);
    }
}
