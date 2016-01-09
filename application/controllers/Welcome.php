<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
//
//class Welcome extends CI_Controller {
//
//	/**
//	 * Index Page for this controller.
//	 *
//	 * Maps to the following URL
//	 * 		http://example.com/index.php/welcome
//	 *	- or -
//	 * 		http://example.com/index.php/welcome/index
//	 *	- or -
//	 * Since this controller is set as the default controller in
//	 * config/routes.php, it's displayed at http://example.com/
//	 *
//	 * So any other public methods not prefixed with an underscore will
//	 * map to /index.php/welcome/<method_name>
//	 * @see http://codeigniter.com/user_guide/general/urls.html
//	 */
//	/*public function index()
//	{
//		$this->load->view('welcome_message');
//	}*/
//
//    function __constuct(){
//        parent::__construct();
//    }
//
//    public function index()
//    {
//        $this->load->model('model_artworks');
//        $this->home();
//    }
//
//    public function home(){
//
//        $data['page_header'] = 'Art';
//        $data['artworks'] = $this->model_artworks->getArtworks();
//        $this->load->view('view_home', $data);
//    }
//
//    public function artwork_info(){
//        $this->load->model('model_artworks');
//
//        $data['page_header'] = 'Artwork Info';
//        $data['artworks'] = $this->model_artworks->getArtworks();
//        $this->load->view('view_artwork_info', $data);
//
//    }
//}
