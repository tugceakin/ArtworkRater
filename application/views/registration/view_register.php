
<div class="container">
    <form class="form-horizontal center" id="registration" method='POST' action='<?php echo base_url(); ?>register/register_user'>

    <fieldset>
            <legend>Registration Form</legend>


            <div class="control-group">
                <label class="control-label" for="firstname">Username:</label>
                <div class="controls">
                    <input type="text" id="username" value="<?php echo set_value('username'); ?>" name="username" />
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="email">Email:</label>
                <div class="controls">
                    <input type="email" id="email" value="<?php echo set_value('email'); ?>" name="email" />
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="firstname">Address:</label>
                <div class="controls">
                    <input type="text" id="address" value="<?php echo set_value('address'); ?>" name="address" />
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="password">Password:</label>
                <div class="controls">
                    <input type="password" id="password" value="<?php echo set_value('password'); ?>" name="password" />
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="password_conf">Confirm Password:</label>
                <div class="controls">
                    <input type="password" id="password_conf" value="<?php echo set_value('password_conf'); ?>" name="password_conf" />
                </div>
            </div>

                    <!--<div>
                        <input type="submit" name="submit" value="Register" />
                    </div>-->
            <div class="control-group">
                <label class="control-label"></label>
                <div class="controls">
                    <button type="submit" name="submit" value ="Register" class="btn btn-success" >Register</button>
                </div>
            </div>
        </fieldset>
    </form>
    <?php echo validation_errors('<p class="error">'); ?>
</div>
