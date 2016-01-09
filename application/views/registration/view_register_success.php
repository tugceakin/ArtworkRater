<div class="alert alert-success text-center">
<!--    <p>--><?php //echo "Well done! You successfully registered, ".$firstname.'!';?><!--</p>-->
    <p><?php echo "Well done! You successfully registered, ".$username.'!';?></p>
    <button type="button" class="btn btn-primary" id ="loginAfterReg">
        <a href="<?php echo site_url('login') ?>"
           id ="loginAfterRegLink">Click to Login</a>
        </button>
</div>