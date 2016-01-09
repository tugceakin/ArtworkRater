<?php
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 4/27/15
 * Time: 10:00 PM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */

    private $logged_in;

    function __constuct(){
        parent::__construct();
        if($this->session->userdata('logged_in')){
            $this->logged_in = true;
        }else{
            $this->logged_in = false;
        }
    }

    public function index()
    {
        $this->load->view('includes/header');
        $this->home();
        $this->load->view('includes/footer');
    }

    public function home(){
        $this->load->model('model_artworks');
        $data['page_header'] = 'Art';
        $data['artworks'] = $this->model_artworks->getArtworks();
        $data['logged_in'] = $this->logged_in;
        $this->load->view('view_home', $data);

    }

    public function artwork_info(){
        $this->load->view('includes/header');
        $this->load->model('model_artworks');

        $data['page_header'] = 'Artwork Info';
        $data['artworks'] = $this->model_artworks->getArtworks();
        $this->load->view('view_artwork_info', $data);
        $this->load->view('includes/footer');

    }
}
