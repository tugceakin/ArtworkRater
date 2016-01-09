<?php
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 4/27/15
 * Time: 2:45 AM
 */
    class Model_artworks extends CI_Model {

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

    }