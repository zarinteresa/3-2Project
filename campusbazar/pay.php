<?php
session_start();
/*ini_set('display_errors', 1);*/

$cust_name= $_POST['cust_name'];
$allvalues= $_SESSION['kela'];
$total= $_POST['total_price'];
$delivery= $_POST['delivery'];
$pay_type= $_POST['pay_type'];

//print_r($cust_name);

$some= json_decode($allvalues);
//print_r($some);

$sent= array();

$items = array();
		foreach($some as $arr) {
		    foreach($arr as $key => $value) {
		        $items[$key] = $value;
		    }
		    /*print_r($items);
		    echo "<br />";*/
		}
if($delivery == 1){
	$total= $total + 50;
}
elseif($delivery == 2) {
			$total= $total + 150;
		}

$_SESSION['del']= $delivery;

if($pay_type ==1){
	header("location:online.php");
}
else{
	header("location:cod.php");
}
?>