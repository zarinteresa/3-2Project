<?php session_start();
include("connection.php");
  if (!isset($_SESSION['user'])) {
  header("location:vendor.php");
}
 ?>

 <?php 
 $q = "select * from products";
 $r = mysqli_query($conn,$q);
 ?>


<?php include_once("./templates/top.php"); ?>
<?php include_once("./templates/navbar.php"); ?>
<div class="container-fluid">
  <div class="row">
    
    <?php include "./templates/sidebar.php"; ?>

      <div class="row">
      	<div class="col-10">
      		<h2>Product List</h2>
      	</div>
      	<div class="col-2">
      		<a href="#" data-toggle="modal" data-target="#add_product_modal" class="btn btn-primary btn-sm">Add Product</a>
      	</div>
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <td>#</td>
              <td>Name</td>
              <td>Image</td>
              <td>Price</td>
            </tr>
            <tr>
              <?php 

                while($row = mysqli_fetch_assoc($r)){
                    

              ?>
              <td> <?php echo $row['product_id']; ?></td>
              <td> <?php echo $row['product_title']; ?></td>
              <td> <?php echo $row['product_image']; ?></td>
              <td> <?php echo $row['product_price']; ?></td>
              </tr>
              <?php 
                }
                ?>
            
          </thead>
          <tbody id="product_list">
          </tbody>
        </table>
      </div>
    </main>
  </div>
</div>



<!-- Add Product Modal start -->
<div class="modal fade" id="add_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="" method="get">
						<div class="key">
							<i class="fa fa-user" aria-hidden="true"></i>
							<input  type="text" value="Product Name" name="Pname" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pname';}" required="true">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-envelope" aria-hidden="true"></i>
							<input  type="text" value="Product Description" name="Pdescription" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pdescription';}" required="true">
							<div class="clearfix"></div>
						</div>
						<div class="key">
							<i class="fa fa-phone" aria-hidden="true"></i>
							<input  type="text" value="Price" name="Pprice" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pprice';}" required="true">
							<div class="clearfix"></div>
						</div>
					
						<div class="key">
							<i class="fa fa-lock" aria-hidden="true"></i>
							<input  type="file" value="Image" name="Pimage" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Pimage';}" required="true">
							<div class="clearfix"></div>
						</div>
						<input type="submit" name="submit" value="Submit">
					</form>
          <?php
if(isset($_GET['submit'])){

$pname= $_GET['Pname'];
$pprice= $_GET['Pprice'];
$pdesc= $_GET['Pdescription'];
$pimage= $_GET['Pimage'];

						

if($uname != "" && $pname != "" && $pprice != "" && $pdesc != "" && $pimage != "")
{
$query="INSERT INTO products values (DEFAULT,'$pname','$pprice','$pdesc','$pimage')";
$data= mysqli_query($conn, $query);

if($data == false){
echo "All Fields Required ";
}
}	
}
else{
echo "All Fields Required ";
}

?>
      </div>
    </div>
  </div>
</div>
<!-- Add Product Modal end -->

<!-- Edit Product Modal start -->
<div class="modal fade" id="edit_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="edit-product-form" enctype="multipart/form-data">
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <label>Product Name</label>
                <input type="text" name="e_product_name" class="form-control" placeholder="Enter Product Name">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Description</label>
                <textarea class="form-control" name="e_product_desc" placeholder="Enter product desc"></textarea>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Price (Taka)</label>
                <input type="number" name="e_product_price" class="form-control" placeholder="Enter Product Price">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <label>Product Image <small>(format: jpg, jpeg, png)</small></label>
                <input type="file" name="e_product_image" class="form-control">
                <img src="" class="img-fluid" width="50">
              </div>
            </div>
            <input type="hidden" name="pid">
            <input type="hidden" name="edit_product" value="1">
            <div class="col-12">
              <button type="button" class="btn btn-primary submit-edit-product">Add Product</button>
            </div>
          </div>
          
        </form>
      </div>
    </div>
  </div>
</div>


<?php include_once("./templates/footer.php"); ?>



<script type="text/javascript" src="./js/products.js"></script>