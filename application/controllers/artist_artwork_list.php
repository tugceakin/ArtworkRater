<?php
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 5/20/15
 * Time: 2:41 PM
 */


class Artist_artwork_list extends CI_Controller
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
        $this->load->model('model_artists');
        $artist_id = $this->uri->segment(2, 0);

        $data['artworks'] = $this->model_artists->getArtworksOfArtist($artist_id);
        $this->load->view('view_artist_artwork_list', $data);

    }
}
