<!DOCTYPE html>
<!--Author     : @arboshiki-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>Login to LobiAdmin</title>
        <link rel="shortcut icon" href="<?= base_url() ?>assets/img/logo/lobiadmin-logo-16.ico" />

        <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css"/>
        
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/login.css"/>
    </head>
    <body style="background-image: url('<?= base_url() ?>assets/img/demo/3_1920.jpg')">
        <div class="login-wrapper fadeInDown animated">
            <form action class="lobi-form login-form visible">
                <div class="login-header">
                    Login to your account
                </div>
                <div class="login-body no-padding">
                    <div class="row">
                        <div class="col-xs-12">
                            <div id="lMessage"></div>
                        </div>
                    </div>
                    <fieldset>
                        <div class="form-group">
                            <label>Username</label>
                            <label class="input">
                                <span class="input-icon input-icon-prepend fa fa-user"></span>
                                <input type="text" name="username" placeholder="Username" required>
                                <span class="tooltip tooltip-top-left"><i class="fa fa-user text-cyan-dark"></i> Please enter the username</span>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <label class="input">
                                <span class="input-icon input-icon-prepend fa fa-key"></span>
                                <input type="password" name="password" placeholder="Password" required>
                                <span class="tooltip tooltip-top-left"><i class="fa fa-key text-cyan-dark"></i> Please enter your password</span>
                            </label>
                            <button type="button" class="btn-link btn-forgot-password">Forgot your password?</button>
                        </div>

                        <div class="row">
                            <div class="col-xs-8">
                                <label class="checkbox lobicheck lobicheck-info lobicheck-inversed lobicheck-lg">
                                    <input type="checkbox" name="remember_me" value="0"> 
                                    <i></i> Remember me
                                </label>
                            </div>
                            <div class="col-xs-4">
                                <button type="submit" class="btn btn-info btn-block"><span class="glyphicon glyphicon-log-in"></span> Login</button>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="login-footer">
                    New user? <button type="button" class="btn btn-xs btn-info btn-sign-up pull-right">Sign up</button>
                </div>
            </form>
            <!--Sign up form-->
            <form action class="lobi-form signup-form">
                <div class="login-header">
                    New user? Sign up.
                </div>
                <div class="login-body no-padding">
                    <fieldset>
                        <div class="row">
                            <div class="col-xs-12">
                                <div id="signUpmessage"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxs-12 col-xs-6">
                                <label>First name</label>
                                <label class="input">
                                    <span class="input-icon input-icon-prepend fa fa-user"></span>
                                    <input type="text" name="firstname" placeholder="Firstname" required>
                                </label>
                            </div>
                            <div class="col-xxs-12 col-xs-6">
                                <label>Last name</label>
                                <label class="input">
                                    <span class="input-icon input-icon-prepend fa fa-user"></span>
                                    <input type="text" name="lastname" placeholder="Lastname" required>
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <label class="input">
                                <span class="input-icon input-icon-prepend fa fa-user"></span>
                                <input type="text" name="username" placeholder="Username" required>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <label class="input">
                                <span class="input-icon input-icon-prepend fa fa-envelope"></span>
                                <input type="text" name="email" placeholder="Email address" required>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <label class="input">
                                <span class="input-icon input-icon-prepend fa fa-key"></span>
                                <input type="password" name="password" placeholder="Password" required>
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Confirm password</label>
                            <label class="input">
                                <span class="input-icon input-icon-prepend fa fa-key"></span>
                                <input type="password" name="confirm_password" placeholder="Confirm password" required>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-xs-offset-8">
                                <button type="submit" class="btn btn-info btn-block">Register</button>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="login-footer">
                    Do you already have an account? <button type="button" class="btn btn-xs btn-info btn-sign-in pull-right">Sign in</button>
                </div>
            </form>
            <!--Forgot password form-->
            <form action class="lobi-form pass-forgot-form">
                <div class="login-header">
                    Forgot your password?
                </div>
                <div class="login-body">
                    <fieldset>
                        <div class="form-group">
                            <label>Email or username</label>
                            <label class="input">
                                <span class="input-icon input-icon-prepend fa fa-envelope"></span>
                                <span class="input-icon input-icon-append fa fa-user"></span>
                                <input type="text" name="username" placeholder="Email or username">
                                <span class="tooltip tooltip-bottom-right">Type the email or username used for registration</span>
                            </label>
                            <button type="button" class="btn-link btn-sign-in">Remember your password?</button>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 text-right">
                                <button type="submit" class="btn btn-info btn-block"><i class="fa fa-refresh"></i> Restore password</button>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div class="login-footer">
                    New user? <button type="button" class="btn btn-xs btn-info btn-sign-up pull-right">Sign up</button>
                </div>
            </form>
        </div>
        

        <script type="text/javascript" src="<?= base_url() ?>assets/js/lib/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript">
            var baseURL = "<?= base_url(); ?>";
            $('.login-wrapper').ready(function(){
                $('.login-form').submit(function(){
                    var url = baseURL + 'users/login',
                        formData = $(this).serialize();
                    $.ajax({
                        url : url,
                        method : 'POST',
                        data : formData,
                        success : function(response){
                            var response = JSON.parse(response); 
                            if(response.status) {
                                $('#lMessage').html(response.message);
                                setInterval(function() {
                                    var timeStamp = new Date();
                                    sessionStorage.setItem("lastTimeStamp", timeStamp);
                                    window.location.href = baseURL;
                                }, 2000);
                            } else {
                                $('#lMessage').html(response.message);
                            }
                        }
                    });
                    return false;
                });
                $('.signup-form').submit(function(){
                    var url = baseURL + 'users/signup',
                        formData = $(this).serialize();
                    $.ajax({
                        url : url,
                        method : 'POST',
                        data : formData,
                        success : function(response){
                            var response = JSON.parse(response); 
                            if(response.status) {
                                $('#signUpmessage').html(response.message);
                                setInterval(function() {
                                    var timeStamp = new Date();
                                    sessionStorage.setItem("lastTimeStamp", timeStamp);
                                    window.location.href = baseURL;
                                }, 2000);
                            } else {
                                $('#signUpmessage').html(response.message);
                            }
                        }
                    });
                    return false;
                });
                $('.pass-forgot-form').submit(function(){
                    return false;
                });
            });
            $('.btn-forgot-password').click(function(ev){
                var $form = $(this).closest('form');
                $form.removeClass('visible');
                $form.parent().find('.pass-forgot-form').addClass('visible');
            });
            $('.btn-sign-in').click(function(){
                var $form = $(this).closest('form');
                $form.removeClass('visible');
                $form.parent().find('.login-form').addClass('visible');
            });
            $('.btn-sign-up').click(function(){
                var $form = $(this).closest('form');
                $form.removeClass('visible');
                $form.parent().find('.signup-form').addClass('visible');
            });
        </script>
    </body>
</html>
