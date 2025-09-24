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
                                <h2>Change Password</h2>
                            </div>
                            <div class="billing-inner">
                                <div class="row clearfix">
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Old Password</div>
                                        <input type="text" name="oldpassword" placeholder="Old Password" required>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">New Password</div>
                                        <input type="text" name="newpassword" placeholder="Old Password" required>
                                    </div>

                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <div class="field-label">Confirm Password</div>
                                        <input type="text" name="confirmpassword" placeholder="Old Password" required>
                                    </div>


                                    <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="theme-btn btn-style-five" name="password_update"><span
                                                class="txt">Update Password</span></button>
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </form>
                <?php
                if(isset($_POST["password_update"]))
                {
                    $oldpassword="";
                    $res=mysqli_query($link,"select * from user_registration where username='$_SESSION[user_username]'");
                    while($row=mysqli_fetch_array($res))
                    {
                        $oldpassword=$row["password"];
                    }
                    if($oldpassword!=$_POST["oldpassword"])
                    {
                        ?>
                        <script type="text/javascript">
                            alert("Old Password Does Not Match");

                        </script>
                    <?php
                    }
                    else if($_POST["newpassword"]!=$_POST["confirmpassword"])
                    {
                    ?>
                        <script type="text/javascript">
                            alert("New Password and Confirm New Password Does Not Match");

                        </script>
                    <?php
                    }
                    else {

                        mysqli_query($link, "set names utf8");
                        mysqli_query($link, "update user_registration  set password='$_POST[newpassword]' where username='$_SESSION[user_username]'") or die(mysqli_error($link));
                        ?>
                        <script type="text/javascript">
                            alert("Password updated successfully");
                            window.location.href = window.location.href;
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





