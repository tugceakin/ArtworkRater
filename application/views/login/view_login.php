

<div class="container">

<form class="form-horizontal center" id="registration" method='POST' action='<?php echo base_url(); ?>login/login_user'>
    <fieldset>
        <legend>Sign In</legend>

        <div class="control-group">
            <label class="control-label" for="email">Username:</label>
            <div class="controls">
                <input id="username" value="<?php echo set_value('username'); ?>" name="username" />
            </div>
        </div>


        <div class="control-group">
            <label class="control-label" for="password">Password:</label>
            <div class="controls">
                <input type="password" id="password" value="<?php echo set_value('password'); ?>" name="password" />
            </div>
        </div>

        <!--        <div>-->
        <!--            <input type="submit" name="submit" value="Register" />-->
        <!--        </div>-->
        <div class="control-group">
            <label class="control-label"></label>
            <div class="controls">
                <button type="submit" name="submit" value ="Login" class="btn btn-success">Login</button>
            </div>
        </div>
    </fieldset>
</form>

</div>