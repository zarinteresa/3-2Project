<?php  session_start(); 
include("connection.php");

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $query= "DELETE FROM codpayment where c_id=$id";
    $result=mysqli_query($conn,$query);
    if($result){
        header('location:order.php');
    }
    else{
        die(mysqli_error($conn));
}

}
?>