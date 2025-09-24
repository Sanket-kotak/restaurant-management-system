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
                        <div class="col-lg-12 col-md-12 col-sm-12" style="border-style: solid; border-width: 1px; border-radius:5px;border-color: #c62904; padding:20px;">

                            <div class="sec-title">
                                <h2>View My Order</h2>
                            </div>
                            <div class="billing-inner">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>Order Number</th>
                                        <th>Order Date</th>
                                        <th>Order Time</th>
                                        <th>Order Address</th>
                                        <th>Order Type</th>
                                        <th>Order Status</th>
                                        <th>Order Details</th>
                                    </tr>
                                    <?php
                                    $srno=0;
                                    $res=mysqli_query($link,"select * from order_main where order_username='$_SESSION[user_username]' order by id asc");
                                    while($row=mysqli_fetch_array($res))
                                    {
                                        $srno=$srno+1;
                                        echo "<tr>";
                                        echo "<td>"; echo $srno;  echo "</td>";
                                        echo "<td>"; echo $row["order_number"];  echo "</td>";
                                        echo "<td>"; echo $row["order_date"];  echo "</td>";
                                        echo "<td>"; echo $row["order_time"];  echo "</td>";
                                        echo "<td>"; echo $row["order_address"];  echo "</td>";
                                        echo "<td>"; echo $row["order_type"];  echo "</td>";
                                        echo "<td>"; echo $row["order_status"];  echo "</td>";
                                        echo "<td>"; ?> <a href="order_details.php?id=<?php echo $row["id"]; ?>">Order Details</a> <?php  echo "</td>";
                                        echo "</tr>";
                                    }
                                    ?>
                                </table>
                            </div>

                        </div>


                    </div>
                </form>


            </div>

        </div>

    </div>
</section>



<?php
include "delivery_section.php";
include "service_section.php";
include "footer.php";
?>





