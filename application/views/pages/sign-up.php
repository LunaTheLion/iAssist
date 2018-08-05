<?php echo validation_errors(); ?>

<?php echo form_open('/Login/sign_up_validation'); ?>

<h5>Username</h5>
<input type="text" name="username" value="" size="50" />

<h5>Password</h5>
<input type="password" name="password" value="" size="50" />

<h5>Password Confirm</h5>
<input type="password" name="cpassword" value="" size="50" />

<h5>Email Address</h5>
<input type="email" name="email" value="" size="50" />

<div><input type="submit" value="Submit" /></div>

</form>