<?php
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 5/17/15
 * Time: 8:50 PM
 */

class Detailed_artwork extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_detailed_artwork');
    }

    function index()
    {

        $this->load->view('includes/header');
        $this->home();
        $this->load->view('includes/footer');
    }


    public function home(){
        $artwork_id = $this->uri->segment(2, 0);
        $fixed_artwork_id = 1;

//        if($artwork_id == "delete_comment"){
//            $this->delete_comment($fixed_artwork_id);
//        } else
            if($artwork_id == "save_comment"){
            $artwork_id_save = $this->input->post('artwork_id');
            $this->save_comment($artwork_id_save);
        }
        else{
            $fixed_artwork_id = $this->uri->segment(2, 0);
            //$data['title'] = $this->uri->segment(2, 0);
            $data['artwork_info'] = $this->model_detailed_artwork->getArtworkInfo($artwork_id);
            $data['title'] = $data['artwork_info']->title;
            $data['date'] = $data['artwork_info']->cdate;
            $data['style'] = $data['artwork_info']->style;
            $data['artwork_id'] = $artwork_id;

            $data['artist_info'] = $this->model_detailed_artwork->getArtistInfo($artwork_id);
            $data['fname'] = $data['artist_info']->fname;
            $data['lname'] = $data['artist_info']->lname;

            $data['reviews'] = $this->model_detailed_artwork->getReviews($artwork_id);
            $data['rating'] = $this->getTheAverageRating($data['reviews']);

            $data['artwork'] = $this->model_detailed_artwork->getArtworks();
            $this->load->view('view_detailed_artwork', $data);
        }


    }

    public function save_comment($id){
        $username = $this->session->userdata('username');
        $this->model_detailed_artwork->insertComment($username, $this->uri->segment(3, 0));
        $segments = array('detailed_artwork', $id);
        redirect($segments);
    }

    public function delete_comment(){
        $username = $this->session->userdata('username');
        $this->model_detailed_artwork->deleteComment($username, $this->uri->segment(3, 0));
        $segments = array('detailed_artwork', $this->uri->segment(3, 0));
        redirect($segments);
    }

    //Compute the average rating of the selected artwork
    function getTheAverageRating($reviews){
        $i = 0;
        $total = 0;
        if($reviews != null){
            foreach($reviews as $r){
                $total = $total + $r->rating;
                $i++;
            }
        }else{
            return 0;
        }

        return $total/$i;
    }
}
