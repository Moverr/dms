<?php

if (isset($errors)) {
    echo error_template($errors);
} elseif (isset($success)) {
    echo success_template($success);
    echo jquery_clear_fields();
}



?>

<form action="<?= current_url() ?>" class="form-horizontal" method="post">
    <div class="form-group">
        <div class="col-md-12">

            <input type="text" name="fname" value="<?= set_value('fname') ?>" id="firstname" class="form-control"
                   placeholder="firstname"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="text" name="lname" value="<?= set_value('lname') ?>" id="lastname" class="form-control"
                   placeholder="lastname"/>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="email" name="email" value="<?= set_value('email') ?>" id="email" class="form-control"
                   placeholder="email address"/>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-12">
            <input type="password" name="password" id="password" class="form-control" placeholder="Password"/>
            <span style="color: #fff; padding: 5px;" id="passstrength"></span>
        </div>

    </div>
    <div class="form-group">
        <div class="col-md-12">
            <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Confirm Password"/>
        </div>
    </div>

    <div class="form-group">
        <div class="col-md-6">
            <a href="<?= base_url() ?>" class="btn btn-link btn-block pull-left"><i class="fa fa-home fa-3x"></i></a>
        </div>
        <div class="col-md-6">


            <button id="register" type="submit" name="register" value="Log in" class="btn btn-info btn-block">Register
            </button>
        </div>
    </div>
    <div class="login-subtitle">
        Already have an account? <a
            href="<?= base_url() . $this->uri->segment(1) . '/' . $this->uri->segment(2) . '/login' ?>">Log in</a>
    </div>
</form>

<script type="application/javascript">
    $(document).ready(function () {

        $('#password').keyup(function (e) {

            var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
            var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
            var enoughRegex = new RegExp("(?=.{6,}).*", "g");
            if (false == enoughRegex.test($(this).val())) {
                $('#passstrength').html('More Characters');
            } else if (strongRegex.test($(this).val())) {
                $('#passstrength').className = 'ok';
                $('#passstrength').html('Strong!');
            } else if (mediumRegex.test($(this).val())) {
                $('#passstrength').className = 'alert';
                $('#passstrength').html('Medium!');
            } else {
                $('#passstrength').className = 'error';
                $('#passstrength').html('Weak!');
            }

            //disable and reenable button depending on password strength
            if ($('#passstrength').text() == 'Weak!' || $('#passstrength').text() == 'More Characters') {
                $('#register').attr('disabled', 'disabled');
            }
            else {
                $('#register').removeAttr('disabled');
            }
            return true;
        });
    });
</script>
