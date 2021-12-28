<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


	/*
	 *	-------------------------------------------------------------
	 *  Step1: Use a pre-built math function here and echo it
	 * 
	 * 	-------------------------------------------------------------
	 *	Step 2:  Use a pre-built string function here and echo it
	 * 
	 *	------------------------------------------------------------- 
	 *	Step 3:  Use a pre-built Array function here and echo it
 	 */

	$number = rand( 1, 1000 );	
	echo $number . "<br>";
	
	$string = "kevin";
	echo strlen( $string ) . "<br>";

	$values = ["sadfasf", 34535, "eewerwr", 34535, $string];
	$found = in_array( $string, $values ) . "<br>";

	if( $found ) {
		echo "Wow, we did it together!!";
	} else {
		echo "We messed up, we could not find it..";
	}

	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>