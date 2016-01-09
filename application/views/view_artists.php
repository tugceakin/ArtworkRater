<?php
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 5/20/15
 * Time: 2:30 PM
 */

?><!DOCTYPE html>

<body>

<div class="container" id="artist_container">
    <div class="artist-table" data-example-id="hoverable-table">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>

                <?php if($this->session->userdata('logged_in') == 1):?>
                    <th>Favorite</th>
                <?php endif;?>

            </tr>
            </thead>
            <tbody>

            <?php if($artists != null) :?>

            <?php
            foreach($artists as $a):?>
                <?php $found = false; ?>

            <?php if($favorites != null) :?>

            <?php foreach($favorites as $f):?>

                    <?php if($f->artist_id == $a->artist_id) :?>
                        <?php $found = true; ?>
                    <?php endif;?>

                <?php endforeach;?>
                <tr>
                    <input type="hidden" name="artist_id" method= "post" value="<?php echo $a->artist_id; ?>">

                    <td><a href="<?php echo site_url('artist_artwork_list') ?>/<?php echo $a->artist_id;?>"><?php echo $a->fname; ?></a></td>
                    <td><a href="<?php echo site_url('artist_artwork_list') ?>/<?php echo $a->artist_id;?>"><?php echo $a->lname; ?></a></td>

                    <?php if($this->session->userdata('logged_in') == 1):?>

                    <?php if($found) :?>
                        <td>  <a href="<?php echo base_url(); ?>artist/remove_favorite/<?php echo $a->artist_id; ?>">
                                <span class="glyphicon glyphicon-heart" aria-hidden="true"></span></a>
                        </td>

                    <?php else:?>
                        <td> <a href="<?php echo base_url(); ?>artist/add_favorite/<?php echo $a->artist_id; ?>"><span class="glyphicon glyphicon-heart" aria-hidden="true" style="color:gray;" >

                        </span></a></td>


                    <?php endif;?>
                    <?php endif;?>


                </tr>

                <?php else:?>
                    <tr>
                        <td><a href="<?php echo site_url('artist_artwork_list') ?>/<?php echo $a->artist_id;?>"><?php echo $a->fname; ?></a></td>
                        <td><a href="<?php echo site_url('artist_artwork_list') ?>/<?php echo $a->artist_id;?>"><?php echo $a->lname; ?></a></td>


                        <?php if($this->session->userdata('logged_in') == 1):?>
                        <td><a href="<?php echo base_url(); ?>artist/add_favorite/<?php echo $a->artist_id; ?>">
                                <span class="glyphicon glyphicon-heart" aria-hidden="true" style="color:gray;"></span></a></td>
                        <?php endif;?>


                    </tr>

                <?php endif;?>

            <?php endforeach;?>
            <?php endif;?>


            </tbody>
        </table>

    </div>
</div>