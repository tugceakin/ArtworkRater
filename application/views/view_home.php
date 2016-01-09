<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<body>

<div class="container">

</div>


<div class="container">
    <?php

    if($this->session->userdata('logged_in') == 1){
        $username = $this->session->userdata('username');
        echo "<h2>Welcome back, {$username}!</h2>";
    }
    ?>
    <div class="container">
        <div class="artwork-table" data-example-id="hoverable-table">
            <table class="table table-hover table-striped">
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Style</th>
                    <th>Date</th>
                </tr>
                </thead>
                <tbody>

                <?php
                foreach($artworks as $aw):?>
                    <tr>
                        <td><a href="<?php echo site_url('detailed_artwork') ?>/<?php echo $aw->artwork_id;?>"><?php echo $aw->title; ?></a></td>
                        <td><?php echo ucfirst($aw->style);?></td>
                        <td><?php echo $aw->cdate;?></td>

                    </tr>
                <?php endforeach;?>


                </tbody>
            </table>
        </div>
    </div>
</div>

