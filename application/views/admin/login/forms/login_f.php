    <?php

    if(isset($errors))
    {
        echo error_template($errors);
    }



    ?>



    <form name="loginForm" id="loginForm" class="loginform"
    data-type=""
    data-action="<?=base_url()."admin/login" ?>"
    data-elements=""
    serverside-check=""
    datacompare = ""
    dataaction = ""
    >

    <div class="alert alertmsg_warning warning alert-message-warning " style="font-size:12px;">
    </div>

        <div class="uk-form-row">
            <label for="login_username">Username</label>
            <input class="md-input error_warning" type="text" name="username" id="username"  ng-model="formData.username" />

        </div>
        <div class="uk-form-row">
            <label for="login_username">Password</label>
            <input class="md-input" type="password" name="password" id="password"   ng-model="formData.password" />


        </div>
        <div class="uk-margin-medium-top">
            <button type="submit" name="login" value="Log in" class=" loginbutton btn btn-success btn-lg btn-block">
              <span class="glyphicon glyphicon-flash"></span>

              Log In</button>

        </div>

        <!-- Remember User Credentials -->
        <div class="uk-margin-medium-top">
        <input type="checkbox" name="rememberme" value="rememberme">    Remember Me
        </div>

        <!-- Forgot Password -->
        <div class="uk-margin-medium-top">
        <a href="#"> Forgot Password </a>
        </div>



    </form>
