<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <?= $style ?>
    <script>
        $(document).ready(function() {
            $('.ui.form').form({
                fields: {
                    email: {
                        identifier: 'email',
                        rules: [{
                                type: 'empty',
                                prompt: 'Please enter your e-mail'
                            },
                            {
                                type: 'email',
                                prompt: 'Please enter a valid e-mail'
                            }
                        ]
                    },
                    password: {
                        identifier: 'password',
                        rules: [{
                                type: 'empty',
                                prompt: 'Please enter your password'
                            },
                            {
                                type: 'length[5]',
                                prompt: 'Your password must be at least 5 characters'
                            }
                        ]
                    },
                    captcha: {
                        identifier: 'captcha',
                        rules: [{
                                type: 'empty',
                                prompt: 'Please enter the captcha'
                            }
                        ]
                    }
                }
            });
        });

        $(document).ready(function() {
            $('.captcha-refresh').on('click', function() {
                $.get('<?php echo base_url() . 'index.php/login/refresh'; ?>', function(data) {
                    $('#image_captcha').html(data);
                });
            });
        });
    </script>
</head>

<body>
    <?= $nav ?>

    <br><br>
    <div class="ui container" style="margin-top: 6rem">
        <?php if(isset($_GET['register'])) { ?>
            <div class='ui green message'>
                <div class='header'>
                    Registration Successful
                </div>
                <p>Login to continue</p>
            </div>
        <?php } ?>
        <div class="ui middle aligned center aligned grid">
            <div class="column" style="max-width: 450px">
                <h2 class="ui teal image header">
                    <!-- <img src="assets/images/logo.png" class="image"> -->
                    <div class="content">
                        Log-in to your account
                    </div>
                </h2>
                <form class="ui large form" method="POST" action="<?= base_url('index.php/Login/auth') ?>">
                    <div class="ui stacked segment" style="background-color: #222831;">
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="user icon"></i>
                                <input type="text" name="email" placeholder="E-mail address">
                            </div>
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <i class="lock icon"></i>
                                <input type="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="field">
                            <!-- <div class="ui left icon input"> -->
                                <p id="image_captcha"><?php echo $captchaImg; ?></p>
                            <!-- </div> -->
                        </div>
                        <div class="field">
                            <div class="ui left icon input">
                                <a href="javascript:void(0);" class="captcha-refresh"><i class="refresh icon"></i></a>
                                <input type="text" name="captcha" placeholder="Enter the Captcha above">
                            </div>
                        </div>

                        <button class="ui fluid large teal button" type="submit">
                            Login
                        </button>
                    </div>

                    <div class="ui error message"></div>
                    <?php if (isset($_GET['login'])) { ?>
                        <div class='ui red message'>
                            <div class='header'>
                                Sumting wong
                            </div>
                            <p>Data yang anda masukkan ada Sumting Wong .</p>
                        </div>
                    <?php } ?>
                </form>

                <div class="ui message inverted" style="background-color: #222831;">
                    New to us? <a href="<?= base_url('index.php/Register') ?>">Register here</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>