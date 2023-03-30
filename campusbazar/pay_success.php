<?php 
session_start();

include("connection.php");
error_reporting(0);

if(!isset($_SESSION['customer']))
{
	header("location:login.php");
}

$cust= $_SESSION['customer'];
?>

<!DOCTYPE html>
<html>
<head>
<title>Payment Mail</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta property="og:title" content="Vide" />
<meta name="keywords" content="Registration" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- js -->

<style>
        .pay{
        display: flex;
        flex-wrap: wrap;
        gap:15px;
        }
        .pay .inputBox{
        margin:15px 0;
        }
        .pay .inputBox span{
        margin-bottom: 10px;
        display: block;
        }

        .pay .inputBox input{
        width: 100%;
        border:1px solid #ccc;
        padding:10px 15px;
        font-size: 15px;
        text-transform: none;
        }

        .pay .inputBox input:focus{
        border:1px solid #000;
        }

        .pay .flex{
        display: flex;
        gap:15px;
        }

        .pay .flex .inputBox{
        margin-top: 5px;
        }


        .pay-btn{
        width: 100%;
        padding:20px;
        font-size: 17px;
        background: #27ae60;
        color:#fff;
        margin-top: 5px;
        cursor: pointer;
        }

        .pay-btn:hover{
        background: #2ecc71;
        }
</style>
   <script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>

<!-- start-smoth-scrolling -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Noto+Sans:400,700' rel='stylesheet' type='text/css'>
<!--- start-rate---->
<script src="js/jstarbox.js"></script>
	<link rel="stylesheet" href="css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
		<script type="text/javascript">
			jQuery(function() {
			jQuery('.starbox').each(function() {
				var starbox = jQuery(this);
					starbox.starbox({
					average: starbox.attr('data-start-value'),
					changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
					ghosting: starbox.hasClass('ghosting'),
					autoUpdateAverage: starbox.hasClass('autoupdate'),
					buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
					stars: starbox.attr('data-star-count') || 5
					}).bind('starbox-value-changed', function(event, value) {
					if(starbox.hasClass('random')) {
					var val = Math.random();
					starbox.next().text(' '+val);
					return val;
					} 
				})
			});
		});
		</script>
<!---//End-rate---->

</head>
<body>
<div class="header">

		<div class="container">
			
			<div class="logo">
				<h1 ><a href="index.php">Campus Bazar<span>A reliable place to buy and sell pre-owned goods</span></a></h1>
			</div>
			<div class="head-t">
				<ul class="card">
					<li><a href="login.php" ><i class="fa fa-user" aria-hidden="true"></i>Login</a></li>
					<li><a href="register.php" ><i class="fa fa-arrow-right" aria-hidden="true"></i>Register</a></li>
					<li><a href="vendor-index.php" ><i class="fa fa-user" aria-hidden="true"></i>Vendor Login</a></li>
					<li><a href="contact.php" ><i class="fa fa-user" aria-hidden="true"></i>Contact</a></li>
					<li><a href="cust-logout.php" ><i class="fa fa-user" aria-hidden="true"></i>Logout</a></li>
				</ul>	
			</div>
			
			<div class="header-ri">
				<ul class="social-top">
					<li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
					<li><a href="#" class="icon twitter"><i class="fa fa-google" aria-hidden="true"></i><span></span></a></li>
				</ul>	
			</div>
		

				<?php include_once("top.php"); ?>
					
				</div>			
</div>

     <!--banner-->
<div class="banner-top">
	<div class="container">
		<h3 >Payment</h3>
		<h4><a href="index.php">Home</a><label>/</label>Payment</h4>
		<div class="clearfix"> </div>
	</div>
</div>

<!--login-->

	<div class="login">
		<div class="main-agileits">
				<div class="form-w3agile form1">
					<h3>Confirmation Message and <br> Invoice Will Be Sent To Your Mail</h3>
					




				</div>
			</div>
		</div>
<!--footer-->
<?php include_once("footer.php"); ?>
<!-- //footer-->


<script type="text/javascript">
	
</script>

</body>
</html>