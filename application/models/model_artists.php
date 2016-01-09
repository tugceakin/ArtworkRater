<?php
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 5/20/15
 * Time: 2:30 PM
 */

class Model_artists extends CI_Model {

    function __constuct(){
        parent::__construct();
    }

    //Get all the artists.
    function getArtists(){
        $query = $this->db->query('SELECT * FROM Artist');

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }

    //Get the artworks of selected artist.
    function getArtworksOfArtist($artist_id){
        $sql = "SELECT DISTINCT A.artwork_id, A.style, A.cdate, A.title
                  FROM Create_Artwork C, Artwork A WHERE C.artist_id = $artist_id AND A.artwork_id = C.artwork_id";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }

    //Get favorite artists of the user.
    function getFavoriteArtists(){
        $username = $this->session->userdata('username');
        $sql = "SELECT DISTINCT A.artist_id
                  FROM Fan_Of_Artist F, Artist A WHERE F.username = '$username' AND A.artist_id = F.artist_id";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }

    //Add a favorite artist.
    function addFavorite(){
        $username = $this->session->userdata('username');
        $id = $this->uri->segment(3, 0);

        $sql = "INSERT INTO Fan_Of_Artist (artist_id, username)
                VALUES (".$id.",
                        '".$username."')";
        $this->db->query($sql);
    }

    //Remove the favorite artist.
    function removeFavorite(){
        $username = $this->session->userdata('username');
        $id = $this->uri->segment(3, 0);
        $sql = "DELETE FROM Fan_Of_Artist WHERE artist_id= $id AND username = '$username'";

        $this->db->query($sql);
    }




}