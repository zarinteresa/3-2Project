<?php session_start(); 
include("connection.php");
  if (!isset($_SESSION['user'])) {
  header("location:vendor.php");
}
?>
 <?php 
 $query1 = "select * from codpayment";
 $result1 = mysqli_query($conn,$query1);
 ?>

<?php 
 $query2 = "select * from onlinepayment";
 $result2 = mysqli_query($conn,$query2);
 ?>

<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Orders</h2>
      	</div>
      </div>
      
      <div class="table-responsive">
        <h4>Cash on Delivery</h4>
        <table class="table table-striped table-sm" method="get">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Action</th>
            </tr>
            <tr>
              <?php 

                while($row = mysqli_fetch_assoc($result1)){
                    

              ?>
              <td> <?php echo $row['c_id']; ?></td>
              <td> <?php echo $row['c_name']; ?></td>
              <td> <?php echo $row['c_email']; ?></td>
              <td> <?php echo $row['c_address']; ?></td>
              <td> <?php echo $row['c_phone']; ?></td>
              <td><button class="btn btn-success"><a href="#" class="text-light">Accept</a></button>
              <button class="btn btn-danger"><a href="delete_order.php? deleteid=<?php echo $row['c_id']; ?>"  class="text-light">Delete</a></button>
                </td>
              </tr>
              <?php 
                }
                ?>
          </thead>
          <tbody id="customer_list">
          </tbody>
        </table>
        <h4>Online Payment</h4>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Type</th>
              <th>Transaction no.</th>
              <th>Action</th>
            </tr>
            <tr>
              <?php 

                while($row = mysqli_fetch_assoc($result2)){
                    

              ?>
              <td> <?php echo $row['cus_id']; ?></td>
              <td> <?php echo $row['cus_name']; ?></td>
              <td> <?php echo $row['cus_mail']; ?></td>
              <td> <?php echo $row['cus_addr']; ?></td>
              <td> <?php echo $row['cus_phone']; ?></td>
              <td> <?php echo $row['mob_type']; ?></td>
              <td> <?php echo $row['trans_no']; ?></td>
              <td><button class="btn btn-success"><a href="#" class="text-light">Accept</a></button>
              <button class="btn btn-danger"><a href="#" class="text-light">Delete</a></button>
                </td>
             
              </tr>
              <?php 
                }
                ?>
          </thead>
          <tbody id="customer_list">
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>


<?php include_once("./templates/footer.php"); ?>



<script type="text/javascript" src="./js/customers.js"></script>
