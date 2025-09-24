<!-- Services Section -->
<section class="services-section">
    <!-- Side Image -->

    <div class="auto-container">
        <div class="row clearfix">

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <img src="assets/images/resource/service-1.png" alt="" />
                    </div>
                    <h6>Free shipping on <br> first order</h6>
                    <div class="text">Sign up for updates and <br> get free shipping</div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <img src="assets/images/resource/service-2.png" alt="" />
                    </div>
                    <h6>Best Taste <br> Guaranttee</h6>
                    <div class="text">We use best ingredients to <br> cook the taste food.</div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <img src="assets/images/resource/service-3.png" alt="" />
                    </div>
                    <h6>Variety of <br> Dishes</h6>
                    <div class="text">We give variety of dishes, <br> deserts, and drinks</div>
                </div>
            </div>

            <!-- Service Block -->
            <div class="service-block col-lg-3 col-md-6 col-sm-12">
                <div class="inner-box">
                    <div class="icon-box">
                        <img src="assets/images/resource/service-4.png" alt="" />
                    </div>
                    <h6>25 Minites <br> Delivery</h6>
                    <div class="text">We deliver your food at <br> your dooe that you order</div>
                </div>
            </div>

        </div>
    </div>

    <!-- Newsletter Section -->
    <div class="newsletter-section">
        <div class="auto-container">
            <div class="inner-container">

                <div class="row clearfix">

                    <!-- Title Column -->
                    <div class="title-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <h2>Subscribe to newsletter</h2>
                            <div class="text">Get weekly offer and discounts</div>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <!--Emailed Form-->
                            <div class="emailed-form">
                                <form method="post" action="" name="f02">
                                    <div class="form-group">
                                        <input type="text" name="email" value="" placeholder="Enter your email address" required pattern="[^@\s]+@[^@\s]+\.[^@\s]+" title="please enter valid email address">
                                        <button type="submit" name="subscribe" class="theme-btn">Subscribe</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- End Newsletter Section -->

</section>
<!-- End Services Section -->

<?php
if(isset($_POST["subscribe"]))
{
    $count=0;
    $res=mysqli_query($link,"select * from news_letter  where email='$_POST[email]'");
    $count=mysqli_num_rows($res);
    if($count>0)
    {
            ?>
        <script type="text/javascript">
            alert("Error!! This Email Alrady Exist.");
        </script>
            <?php
    }
    else{

        mysqli_query($link,"insert into news_letter(id,email)values(NULL,'$_POST[email]')");
        ?>
        <script type="text/javascript">
            alert("Success!! You Subscribed Successfully.");
        </script>
        <?php
    }
}
?>