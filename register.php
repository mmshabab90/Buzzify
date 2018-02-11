<?php
    include("includes/handlers/registerHandler.php");
    include("includes/handlers/loginHandler.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/LoginPage/loginStyle.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
  </head>
  <body>
    
    <div class="space-medium">
        <div class="container">
            <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="account-holder">
                                <!--login-form-->
                                <h3>Login to your Account</h3>
                                <br>
                                <div class="social-btn">
                                    <h6>Sign in With</h6>
                                    <div class="fb-btn">
                                        <i class="fa fa-facebook-official"></i><a href="#" class="fb-btn-text">facebook</a>
                                    </div>
                                    <div class="google-btn">
                                        <i class="fa fa-google"></i><a href="#" class="google-btn-text">Google</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <form id="loginForm" action="register.php" method="post">
                                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="control-label required" for="loginEmail">Email<sup style="color:red">*</sup></label>
                                                <input id="loginEmail" name="loginEmail" type="text" class="form-control" placeholder="Enter Email Address" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="control-label required" for="loginPassword">Password<sup style="color:red">*</sup></label>
                                                <input id="loginPassword" name="loginPassword" type="password" class="form-control" placeholder="password" required>
                                            </div>
                                            <a href="#" class="forgot-password">Forgot Password?</a>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                            <button class="btn btn-primary btn-block" name="btnLogin">Login</button>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" value="">

                                                    <p>Remember Me?</p>
                                                     </label>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--/.login-form-->
                        <!--sing-up-form-->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="account-holder">
                                <h3>Signup for glory</h3>
                                <br>
                                <div class="social-btn">
                                    <h6>Sign up With</h6>
                                    <div class="fb-btn">
                                        <i class="fa fa-facebook-official"></i><a href="#" class="fb-btn-text">facebook</a>
                                    </div>
                                    <div class="google-btn">
                                        <i class="fa fa-google"></i><a href="#" class="google-btn-text">Google</a>
                                    </div>
                                </div>
                                <div class="row">
                                    <form id="loginForm" action="register.php" method="post">
                                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="control-label required" for="firstName"> First Name<sup style="color:red">*</sup></label>
                                                <input id="firstName" name="firstName" type="text" class="form-control" placeholder="Enter Your First Name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="control-label required" for="lastName"> Last Name<sup style="color:red">*</sup></label>
                                                <input id="lastName" name="lastName" type="text" class="form-control" placeholder="Enter Your Last Name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="control-label required" for="registerEmail">Email<sup style="color:red">*</sup></label>
                                                <input id="registerEmail" name="registerEmail" type="email" class="form-control" placeholder="Enter Email Here" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="control-label required" for="confirmEmail">Confirm Email<sup style="color:red">*</sup></label>
                                                <input id="confirmEmail" name="confirmEmail" type="email" class="form-control" placeholder="Enter Email Address Again" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <label class="control-label required" for="registerPassword">Password<sup style="color:red">*</sup></label>
                                                <input id="registerPassword" name="registerPassword" type="password" class="form-control" placeholder="password" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label required" for="confirmPassword">Confirm Password<sup style="color:red">*</sup></label>
                                                <input id="confirmPassword" name="confirmPassword" type="password" class="form-control" placeholder="confirm password" required>
                                            </div>
                                            <div class="mb30">
                                                <p>Already have an account?   <a href="#">Login</a></p>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                            <button class="btn btn-primary btn-block" name="btnRegister">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!--/.sing-up-form-->
            </div>
        </div>
    </div>

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
  </body>
</html>