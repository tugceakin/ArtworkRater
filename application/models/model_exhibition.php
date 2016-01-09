<?php
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 5/6/15
 * Time: 3:12 PM
 */

class Model_exhibition extends CI_Model {

    function __constuct(){
        parent::__construct();
    }

    //Get all the exhibitions.
    function getExhibitions(){
        $query = $this->db->query('SELECT * FROM Exhibition');

        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }

    //Get the artworks of selected exhibiton.
    function getArtworksOfExhibition($exhb_id){
        print_r($exhb_id);
        $sql = "SELECT DISTINCT A.artwork_id, A.style, A.cdate, A.title
                  FROM Shown S, Artwork A WHERE S.exhb_id = $exhb_id AND A.artwork_id = S.artwork_id";
        $query = $this->db->query($sql);
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return NULL;
        }
    }

}