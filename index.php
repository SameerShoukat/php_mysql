<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My CRM | </title>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/PHPCRUD/include/head.php'); ?>
    <?php
    if (isset($_SESSION['login'])) {
        header("location:" . ab_path . '/home');
    }
    ?>

</head>

<body>
    <?php include($_SERVER['DOCUMENT_ROOT'] . '/PHPCRUD/include/header.php'); ?>
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="content" id="signin">
                        <div class="text">
                            Login Form
                        </div>
                        <?php $signin = "request" ?>
                        <form action="<?php echo ab_path ?>/server/server.php?signin=<?php echo $signin; ?>" method="post">
                            <div class="field">
                                <input type="text" name="full_name" required>
                                <span class="fas fa-user"></span>
                                <label>Email</label>
                            </div>
                            <div class="field">
                                <input type="password" name="password" required>
                                <span class="fas fa-lock"></span>
                                <label>Password</label>
                            </div>
                            <div class="forgot-pass">
                                <a data-toggle="modal" data-target="#exampleModalCenter" class="navigation-btn" id="forgot-pswd-btn">Forgot Password?</a>
                            </div>
                            <button class="style-btn" type="submit">Sign in</button>
                            <div class="sign-up">
                                Not a member?
                                <a href="javascript:;" class="navigation-btn" id="signup-btn">Signup Now</a>
                            </div>
                        </form>
                    </div>
                    <div class="content" id="signup">
                        <div class="text">
                            Sign Up
                        </div>
                        <?php $signup = "request" ?>
                        <form action="<?php echo ab_path ?>/server/server.php?signup=<?php echo $signup; ?>" method="post">
                            <div class="field">
                                <input type="text" name="full_name" required>
                                <span class="fas fa-user"></span>
                                <label>Email</label>
                            </div>
                            <div class="field">
                                <input type="password" name="password" required>
                                <span class="fas fa-lock"></span>
                                <label>Password</label>
                            </div>
                            <div class="field">
                                <input type="password" name="confirm_password" required>
                                <span class="fas fa-lock"></span>
                                <label>Confirm Password</label>
                            </div>
                            <button class="style-btn" type="submit">Sign Up</button>
                            <div class="sign-up">
                                already a member?
                                <a href="javascript:;" class="navigation-btn" id="signin-btn">Signin</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content content">
                <div class="text">
                    Forgot Password
                </div>
                <?php $forgotpassword = "request" ; ?>
                <form action="<?php echo ab_path ?>/server/server.php?forgotpassword=<?php echo $forgotpassword; ?>" method="post">
                    <div class="field">
                        <input type="text" name="forgot_email" required>
                        <span class="fas fa-user"></span>
                        <label>Enter Your Email</label>
                    </div>
                    <button class="style-btn" type="submit">Submit</button>
                </form>


            </div>
        </div>
    </div>
</body>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/PHPCRUD/include/script.php'); ?>

</html>