<?php
include "header.php";
include "../admin/connection.php";
?>

<section class="products-section">
    <div class="auto-container">

        <!-- Sec Title -->

        <section class="contact-page-section" style="margin-top: 50px;">
            <div class="auto-container">
                <div class="row clearfix">

                    <!-- Form Column -->
                    <div class="form-column col-lg-8 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="title-box">
                                <h3>We Love To Hear From You</h3>
                                <div class="text">If it's not too much trouble informed us regarding whether you have an
                                    inquiry.</div>
                            </div>

                            <!-- Contact Form -->
                            <div class="contact-form">
                                <div class="form-group alert alert-success" id="success" style="display: none;color:green;">
                                    <center><strong style="color:green">Success!</strong> You Message Successfully Pass To Admin, He Will Contact You Soon.</center>
                                </div>

                                <form name="form1" action="" method="post" >
                                    <div class="row clearfix">

                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                            <input type="text" name="full_name" value="" placeholder="Name" required>
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                            <input type="text" name="email" placeholder="Email" required pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="please enter valid email address" >
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <input type="text" name="subject" value="" placeholder="Subject" required>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <textarea name="message" placeholder="Message" required></textarea>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <button type="submit" class="theme-btn btn-style-five" name="submit1"><span
                                                    class="txt">Submit</span></button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                    <!-- Info Column -->
                    <div class="info-column col-lg-4 col-md-12 col-sm-12">
                        <div class="inner-column" style="padding-left: 40px;">
                            <h3>Our Address</h3>
                            <ul>
                                <li><strong>Main Restaurant:</strong>GJ5  fancy dhosa near greenland chowkdi rajkot 360003
                            </li>
                                <li><strong>Our Branch</strong>umvada chowkdi near foot over bridge NH27 gondal 360311
                                <li><strong>Have any querry:</strong>Call us on : 9737232035</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        </div>
    </section>

<?php
if(isset($_POST["submit1"]))
{
    mysqli_query($link,"insert into contact_form(id,full_name,email,subject,message)values(NULL,'$_POST[full_name]','$_POST[email]','$_POST[subject]','$_POST[message]')");

    ?>
    <script type="text/javascript">
        document.getElementById("success").style.display = "block";
        setTimeout(function () {
            window.location.href = window.location.href;
        }, 5000);
    </script>
    <?php
}
?>






