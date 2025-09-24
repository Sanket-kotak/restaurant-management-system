<?php
if(!isset($_SESSION))
{
    session_start();
}
?>
<?php
include "../admin/connection.php";
include "header.php";
//include "slider.php";

$firstname="";
$lastname="";
$email="";
$contact="";
$address="";

mysqli_query($link,"set names utf8");
$res=mysqli_query($link,"select * from user_registration where username='$_SESSION[user_username]'");
while($row=mysqli_fetch_array($res))
{
    $firstname=$row["firstname"];
    $lastname=$row["lastname"];
    $email=$row["email"];
    $contact=$row["contact"];
    $address=$row["address"];


}
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
                        <div class="col-lg-6 col-md-12 col-sm-12" style="border-style: solid; border-width: 1px; border-radius:5px;border-color: #c62904; padding:20px;">

                            <div class="sec-title">
                                <h2>Update Your Profile</h2>
                            </div>
                            <div class="billing-inner">
                                <div class="row clearfix">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">FirstName</div>
                                        <input type="text" name="firstname" value="<?php echo $firstname?>"
                                               placeholder="First Name" required>
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">LastName</div>
                                        <input type="text" name="lastname" value="<?php echo $lastname?>"
                                               placeholder="Last Name" required>
                                    </div>



                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Email</div>
                                        <input type="email" name="email" value="<?php echo $email?>"
                                               placeholder="Email" required>
                                    </div>

                                    <!--Form Group-->
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Contact</div>
                                        <input type="text" name="contact" value="<?php echo $firstname?>"
                                               placeholder="Contact" required>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Address</div>
                                        <textarea name="address"
                                                  placeholder="Address"><?php echo $address?></textarea>
                                    </div>

                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-five" name="address_update"><span
                                                class="txt">Update</span></button>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </form>
                <?php
                if(isset($_POST["address_update"]))
                {
                    mysqli_query($link,"set names utf8");
                    mysqli_query($link,"update user_registration  set firstname='$_POST[firstname]',lastname='$_POST[lastname]',email='$_POST[email]',contact='$_POST[contact]',address='$_POST[address]' where username='$_SESSION[user_username]'")or die(mysqli_error($link));

                    ?>
                <script type="text/javascript">
                    alert("Profile updated successfully");
                    window.location.href=window.location.href;
                </script>
                    <?php

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





