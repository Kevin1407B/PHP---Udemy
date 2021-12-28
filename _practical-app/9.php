<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<?php

session_start();

$_SESSION["hallo"] = "hello everyone";

$name = "cookiemonster";
$value = 2021;
$expires = time() + (60 * 60 * 24 * 7);

$cookie = setcookie($name, $value, $expires);

?>

<section class="content">
	<aside class="col-xs-4">

		<?php Navigation();?>
		
	</aside>
	<!--SIDEBAR-->
	<article class="main-content col-xs-8">
		<?php $id = 10; ?>

		<a href="9.php?id=<?php echo $id; ?>">Click Here</a>	

		<?php 
		
		echo "<br>";

		if( isset($_GET["id"]) ) {
			echo $_GET["id"] . "<br>";
		}

		if( isset($_COOKIE["cookiemonster"]) ) {
			echo $_COOKIE["cookiemonster"] . "<br>";
		}

		if( isset($_SESSION["hallo"]) ) {
			echo $_SESSION["hallo"] . "<br>";
		}

		/*
		*	--------------------------------------------------------
		*	Step 1 - Create a link saying Click Here, and set 
		*	the link href to pass some parameters and use the GET super global to see it
		*
		*	Step 2 - Set a cookie that expires in one week
		* 
		*	Step 3 - Start a session and set it to value, any value you want.
		*/
		
		?>

	</article>
	<!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>