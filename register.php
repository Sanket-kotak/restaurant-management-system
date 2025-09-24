<?php
include "../admin/connection.php";
include "header.php";
//include "slider.php";
?>

<section class="checkout-page">
    <div class="auto-container">

        <!-- Sec Title -->
        <!--  <div class="sec-title centered">
              <h2>Register</h2>
          </div>-->
        <div class="billing-details">
            <div class="shop-form">
                <form method="post" action="" name="">
                    <div class="row clearfix">
                        <div class="col-lg-3"></div>
                        <div class="col-lg-6 col-md-12 col-sm-12"
                             style="border-style: solid; border-width: 1px; border-radius:5px;border-color: #c62904; padding:20px;">

                            <div class="sec-title">
                                <h2>Registration Page</h2>
                            </div>
                            <div class="billing-inner">
                                <div class="row clearfix">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="alert alert-danger col-md-12" id="errmsg" style="display: none;">
                                            <strong style="color: red">Invalid!</strong><span style="color: red"> This Username Already Exist.</span>
                                        </div>
                                        <div class="form-group alert alert-success" id="success"
                                             style="display: none;color:green;">
                                            <center><strong style="color:green">Success!</strong> User Insert
                                                Successfully.
                                            </center>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">FirstName</div>
                                        <input type="text" name="firstname" value=""
                                               placeholder="First Name" required>
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">LastName</div>
                                        <input type="text" name="lastname" value=""
                                               placeholder="Last Name" required>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">UserName</div>
                                        <input type="text" name="username" value=""
                                               placeholder="User Name" required>
                                    </div>

                                    <!--Form Group-->
                                     

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Email</div>
                                        <input type="email" name="email" value=""
                                               placeholder="Email" required>
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Contact Number</div>
                                        <input type="text" name="contact" value=""
                                               placeholder="Contact" required>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Address</div>
                                        <textarea name="Address"
                                                  placeholder="Address"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Password</div>
                                        <input type="password" name="password" id="password" placeholder="Password" required>
                                        <small id="passwordHelpBlock" class="form-text text-muted">
                                            Your password must be at least 8 characters long, contain at least one number, and have both uppercase and lowercase letters.
                                        </small>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Confirm Password</div>
                                        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                                    </div>

                                    <div id="passwordError" class="alert alert-danger" style="display: none;">
                                        <strong style="color: red">Error:</strong> Password does not meet requirements or passwords do not match.
                                    </div>


                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-five" name="register"><span
                                                class="txt">Register Now</span></button>
                                    </div>

                                </div>
                            </div>
                            <ul class="default-links">
                                <li>Existing User? <a href="login.php" onclick="window.location='login.php'"
                                                      data-toggle="modal" data-target="#schedule-box">Click here to
                                        Login</a></li>
                            </ul>
                        </div>


                    </div>
                </form>
                <?php
                if (isset($_POST["register"])) {
                    $count = 0;
                    $res = mysqli_query($link, "select * from user_registration  where username='$_POST[username]'");
                    $count = mysqli_num_rows($res);

                    if ($count > 0) {
                        ?>
                        <script type="text/javascript">
                            document.getElementById("errmsg").style.display = "block";
                        </script>
                    <?php
                    }
                    else {
                    mysqli_query($link, "set names utf8");
                    mysqli_query($link, "insert into user_registration (id,firstname,lastname,username,password,email,contact,Address)values (NULL,'$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','$_POST[Address]')");

                    ?>
                        <script type="text/javascript">
                            document.getElementById("success").style.display = "block";
                            setTimeout(function () {
                                window.location = "login.php";
                            }, 2000);
                        </script>
                        <?php
                    }

                }


                ?>

            </div>

        </div>

    </div>
</section>


<?php
include "delivery_section.php";
include "service_section.php";
include "footer.php";
?>





