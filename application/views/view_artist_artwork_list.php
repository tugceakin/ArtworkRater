<?php
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 5/20/15
 * Time: 2:42 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<body>


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

            <?php if($artworks != null) :?>

            <?php
            foreach($artworks as $aw):?>
                <tr>
                    <td><a href="<?php echo site_url('detailed_artwork') ?>/<?php echo $aw->artwork_id;?>"><?php echo $aw->title; ?></a></td>
                    <td><?php echo ucfirst($aw->style);?></td>
                    <td><?php echo $aw->cdate;?></td>

                </tr>
            <?php endforeach;?>

            <?php endif;?>

            </tbody>
        </table>
    </div>
</div>