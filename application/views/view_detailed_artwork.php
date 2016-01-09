<?php
/**
 * Created by PhpStorm.
 * User: tugceakin
 * Date: 5/17/15
 * Time: 8:40 PM
 */

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<body>

<div class="container">
    <h1 style="text-align:center"><?php echo $title; ?></h1>
    <h2 style="text-align:center">Style: <?php echo ucfirst($style); ?></h2>
    <h2 style="text-align:center">Creator: <?php echo $fname; ?> <?php echo $lname; ?></h2>
    <h2 style="text-align:center">Average Rating: <?php echo round( $rating, 1, PHP_ROUND_HALF_UP); ?></h2>

    <?php if($this->session->userdata('logged_in') == 1):?>

        <form class="form-horizontal center" id="savecomment" method='POST' action='<?php echo base_url(); ?>detailed_artwork/save_comment/<?php echo $artwork_id;?>'>
        <fieldset>
            <h3>Add/Edit Comment</h3>
                <input type="hidden" name="artwork_id" value="<?php echo $artwork_id; ?>">

                <label class="radio-inline">
                    <input type="radio" checked name="rating" id="inlineRadio1" value="1"> 1
                </label>
                <label class="radio-inline">
                    <input type="radio" name="rating" id="inlineRadio2" value="2"> 2
                </label>
                <label class="radio-inline">
                    <input type="radio" name="rating" id="inlineRadio3" value="3"> 3
                </label>
                <label class="radio-inline">
                    <input type="radio" name="rating" id="inlineRadio3" value="4"> 4
                </label>
                <label class="radio-inline">
                    <input type="radio" name="rating" id="inlineRadio3" value="5"> 5
                </label>



            <div class="control-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="5" name="comment" id="comment"></textarea>
            </div>

            <div class="control-group">
                <label class="control-label"></label>
                <div class="controls">
                    <button type="submit" name="submit" value ="Save" class="btn btn-success btn-sm" >Save Comment</button>
                </div>
            </div>
        </fieldset>
    </form>

    <?php endif;?>

    <h2 id="comments">Comments:</h2>


    <?php if($reviews != null):?>

    <?php
    foreach($reviews as $r):?>
        <?php if($r != null):?>

        <div class="panel panel-default">
            <div class="panel-heading">
            <?php if($r->username == $this->session->userdata('username')):?>

                <h3 class="panel-title"><?php echo$r->username; ?><b style="margin-left:30px">Rating:</b> <?php echo $r->rating; ?>

                    <a href='<?php echo base_url(); ?>detailed_artwork/delete_comment/<?php echo $r->artwork_id;?>'
                            style="color: #18bc9c;" class="comment_delete" >Delete
                    </a></h3>

                <?php else:?>

                <h3 class="panel-title"><?php echo$r->username; ?><b style="margin-left:30px">Rating:</b> <?php echo $r->rating; ?></h3>

            <?php endif;?>


            </div>
            <div class="panel-body">
                <?php echo$r->review_text; ?>
            </div>

        </div>
        <?php endif;?>
    <?php endforeach;?>
    <?php endif;?>






</div>
