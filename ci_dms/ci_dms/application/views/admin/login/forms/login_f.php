<?php

if(isset($errors))
{
    echo error_template($errors);
}



?>

<form action="<?=current_url()?>"  method="post">
    <div class="uk-form-row">
        <label for="login_username">Username</label>
        <input class="md-input" type="text" name="username" id="username" />
    </div>
    <div class="uk-form-row">
        <label for="login_username">Password</label>
        <input class="md-input" type="password" name="password" id="password"  />
    </div>
    <div class="uk-margin-medium-top">
        <button type="submit" name="login" value="Log in" class="md-btn md-btn-primary md-btn-block md-btn-large">Log In</button>

    </div>

</form>




