<?php
if(!isset($_SESSION))
{
    session_start();
}
?>
<?php
include "../admin/connection.php";
include "header.php";
$id=$_GET["id"];
$full_name="";
$contact_number="";
$order_date="";
$email="";
$order_type="";
$order_status="";
$order_number="";
$address="";
$res=mysqli_query($link,"select * from order_main where id='$id'");
while($row=mysqli_fetch_array($res))
{
    $full_name=$row["user_firstname"]." ".$row["user_lastname"];
    $contact_number=$row["user_contact"];
    $order_date=$row["order_date"]." ".$row["order_time"];
    $email=$row["user_email"];
    $order_type=$row["order_type"];
    $order_status=$row["order_status"];
    $order_number=$row["order_number"];
    $address=$row["order_address"];
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
                        <div class="col-lg-12 col-md-12 col-sm-12" style="border-style: solid; border-width: 1px; border-radius:5px;border-color: #c62904; padding:20px;">

                            <div class="sec-title">
                                <h2>Order Details</h2>
                            </div>

                            <div class="row" style="margin-top: 10px;">
                                <div class="col-lg-6">
                                    Customer Name: <?php echo $full_name; ?> <br>
                                    Contact No: <?php echo $contact_number; ?><br>
                                    Order Date: <?php echo $order_date; ?><br>
                                    Email: <?php echo $email; ?><br>
                                    Address: <?php echo $address; ?>
                                </div>
                                <div class="col-lg-6" style="text-align: right">
                                    Order Number: <?php echo $order_number; ?><br>
                                    Order Type: <?php echo $order_type; ?><br>
                                    Order Status: <?php echo $order_status; ?>
                                </div>
                            </div>

                            <div class="billing-inner">
                                <table class="table table-bordered" style="margin-top: 50px;">
                                    <tr>
                                        <th>Sr No.</th>
                                        <th>Image</th>
                                        <th>Food Name</th>
                                        <th>Food Category</th>
                                        <th>Food Description</th>
                                        <th>Food Ingredients</th>
                                        <th>Food Price</th>
                                        <th>Food Qty</th>
                                        

                                    </tr>
                                    <?php
                                    $srno=0;
                                    $tot=0;
                                    $res=mysqli_query($link,"select * from order_details where order_id='$id'");
                                    while($row=mysqli_fetch_array($res))
                                    {
                                        $srno=$srno+1;
                                        echo "<tr>";
                                        echo "<td>"; echo $srno;  echo "</td>";
                                        echo "<td>"; ?> <img src="../admin/<?php echo $row["food_image"]; ?>" height="100" width="100"> <?php echo "</td>";
                                        echo "<td>"; echo $row["food_name"];  echo "</td>";
                                        echo "<td>"; echo $row["food_category"];  echo "</td>";
                                        echo "<td>"; echo $row["food_description"];  echo "</td>";
                                        echo "<td>"; echo $row["food_ingredients"];  echo "</td>";
                                        echo "<td>"; echo "Rs".$row["food_discount_price"];  echo "</td>";
                                        echo "<td>"; echo $row["food_qty"];  echo "</td>";
                                        echo "<td>"; echo $row["food_veg_nonveg"];  echo "</td>";
                                        echo "</tr>";
                                        $tot=$tot+($row["food_discount_price"]*$row["food_qty"]);
                                    }
                                    ?>
                                </table>
                                <div style="text-align: right">
                                    Total:$<?php echo $tot; ?>
                                </div>

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





