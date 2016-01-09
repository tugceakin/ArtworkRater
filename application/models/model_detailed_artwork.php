<?php
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 5/17/15
 * Time: 8:40 PM
 */

class Model_detailed_artwork extends CI_Model {

    function __constuct(){
        parent::__construct();
    }

    function getArtworks(){
        $query = $this->db->query('SELECT * FROM Artwork');

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }


    function getArtworkInfo($id){
        $sql = "SELECT * FROM Artwork WHERE artwork_id= $id";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0){
            return $query->row();
        }else{
            return NULL;
        }
    }

    function getArtistInfo($id){
        $sqlCA = "SELECT * FROM Create_Artwork WHERE artwork_id= $id";
        $query = $this->db->query($sqlCA);
        $artist_id = $query->row()->artist_id;

        $sqlA = "SELECT * FROM Artist WHERE artist_id= $artist_id";
        $query = $this->db->query($sqlA);
        return $query->row();

    }

    function getReviews($id){
        $sql = "SELECT * FROM Review WHERE artwork_id= $id";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }

    function insertComment($username, $artwork_id){
        $rating = $this->input->post('rating');
        $comment = $this->input->post('comment');
//        $username = $this->session->userdata('username');
//        $artwork_id = $this->input->post('artwork_id');

        $result = $this->getComment($username, $artwork_id);

        // If user already has a comment, then edit the comment. Otherwise insert a new comment.
        if($result != null){
            $sql = "UPDATE Review SET rating = $rating, review_text = '$comment' WHERE username = '$username' AND artwork_id = '$artwork_id'";
            $this->db->query($sql);
        }else{

            $sql = "INSERT INTO Review (artwork_id, username, rating, review_text )
                VALUES (".$artwork_id.",
                        '".$username."',
                        '".$rating."',
                        '".$comment."')";
        }


        $this->db->query($sql);

    }

    function getComment($username, $artwork_id){
        $sql = "SELECT * FROM Review WHERE artwork_id= $artwork_id AND username = '$username'";
        $query = $this->db->query($sql);

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }

    function deleteComment($username, $artwork_id){
        $sql = "DELETE FROM Review WHERE artwork_id= $artwork_id AND username = '$username'";
        $this->db->query($sql);

    }


}