<!DOCTYPE html>
<!--Author      : @arboshiki-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>LobiAdmin lock screen</title>
        <link rel="shortcut icon" href="<?= base_url() ?>assets/img/logo/lobiadmin-logo-16.ico" />

        <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/font-awesome.min.css"/>
        
        <link rel="stylesheet" href="<?= base_url() ?>assets/css/lock-screen.css"/>
        <script type="text/javascript">
            var baseURL = "<?= base_url(); ?>";
            </script>
    </head>
    <body>
        <div class="lock-screen slideInDown animated">
            <div class="lock-form-wrapper">
                <div>
                    <form action class="lock-screen-form lobi-form">
                        <div class="row">
                            <div class="col-xs-12">
                                <div id="message"></div>
                            </div>
                        </div>
                        <div class="row lock-screen-body">
                            <div class="col-xxs-12 col-xs-4">
                                <img src="<?= base_url() ?>assets/img/users/me-160.jpg" class="horizontal-center img-responsive" alt />
                            </div>
                            <div class="col-xxs-12 col-xs-8">
                                <h4 class="fullname"><?= ( isset($_SESSION['firstname']) ? $_SESSION['firstname'] : 'Anonymous' ) ?> <small class="text-gray pull-right"><i class="fa fa-lock"></i> Locked</small></h4>
                                <h6 class="lock-screen-email"><?= ( isset($_SESSION['email']) ? $_SESSION['email'] : 'Anonymous' ) ?></h6>
                                <div class="form-group margin-bottom-5">
                                    <div class="input-group">
                                        <input type="hidden" name="id" value="<?= ( isset($_SESSION['id']) ? $_SESSION['id'] : '0' ) ?>">
                                        <input type="password" name="password" class="form-control" placeholder="Type to password">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info"><i class="fa fa-key"></i></button>
                                        </span>
                                    </div>
                                </div>
                                <span class="text-gray-lighter">Login as someone else? <a href="<?= base_url('login'); ?>">Click here</a></span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="carousel-wrapper slideInDown animated">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        <div class="item">
                            <div class="fill" style="background-image:url('<?= base_url() ?>assets/img/demo/1_1920.jpg');">
                                <div class="container">

                                </div>
                            </div>
                        </div>
                        <div class="item active">
                            <div class="fill" style="background-image:url('<?= base_url() ?>assets/img/demo/2_1920.jpg');">
                                <div class="container">

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="fill" style="background-image:url('<?= base_url() ?>assets/img/demo/3_1920.jpg');">
                                <div class="container">

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="fill" style="background-image:url('<?= base_url() ?>assets/img/demo/5_1920.jpg');">
                                <div class="container">

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="fill" style="background-image:url('<?= base_url() ?>assets/img/demo/6_1920.jpg');">
                                <div class="container">

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lock-screen-clock">
                        <div class="lock-screen-time"></div>
                        <div class="lock-screen-date"></div>
                    </div>
                </div>
            </div>
        </div>
        
        <script type="text/javascript" src="<?= base_url() ?>assets/js/lib/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/bootstrap/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>assets/js/config.js"></script>
        <script type="text/javascript">
            $(function(){
                var CONFIG = window.LobiAdminConfig;
                $('.lock-screen-form').submit(function(){
                    var url = baseURL + 'users/unlock',
                        formData = $(this).serialize();
                    $.ajax({
                        url : url,
                        method : 'POST',
                        data : formData,
                        success : function(response){
                            var response = JSON.parse(response); 
                        
                            if(response.status) {
                                console.log(response.message);
                                $('#message').html(response.message);
                                setInterval(function() {
                                    var timeStamp = new Date();
                                    sessionStorage.setItem("lastTimeStamp", timeStamp);
                                    window.location.href = baseURL;
                                }, 500);
                            } else {
                                $('#message').html(response.message);
                            }
                        }
                    });
                    return false;
                });
                //Initialize time on lock screen and timeout for show slideshow
                (function () {
                    var monthNames = CONFIG.monthNames;
                    var weekNames = CONFIG.weekNames;
                    setInterval(function () {
                        var d = new Date();
                        var h = d.getHours();
                        var m = d.getMinutes();
                        $('.lock-screen-time').html((Math.floor(h / 10) === 0 ? "0" : "") + h + ":" + (Math.floor(m / 10) === 0 ? "0" : "") + m);
                        $('.lock-screen-date').html(weekNames[d.getDay()] + ", " + monthNames[d.getMonth()] + " " + d.getDate());
                    }, CONFIG.updateTimeForLockScreen);

                })();
                //Initialize carousel and catch form submit
                (function () {
                    var $lock = $('.lock-screen');
                    var $car = $lock.find('.carousel');
                    $car.click(function () {
                        $car.parent().addClass('slideOutUp').removeClass('slideInDown');
                        setTimeout(function () {
                            $('.lock-screen .carousel-wrapper').removeClass('slideOutUp').addClass('slideInDown');
                        }, CONFIG.showLockScreenTimeout);
                    });
                    $car.carousel({
                        pause: false,
                        interval: 8000
                    });
                })();
            });
        </script>
    </body>
</html>
