<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

if( 5 > 7 ) {
	echo "bad at math";
} elseif( 5 < 4 ) {
	echo "really bad at math";
} else {
	echo "I love PHP!!!";
}

echo "<br>";
echo "<br>";

for( $i = 1; $i <= 10; $i++ ) {
	echo $i . " ";
}

echo "<br>";
echo "<br>";

$number = 1;

switch( $number ) {
	case 1:
		echo "the number is 1";
		break;
	case 2:
		echo "the number is 2";
		break;
	case 3:
		echo "the number is 3";
		break;
	case 4:
		echo "the number is 4";
		break;
	case 5:
		echo "the number is 5";
		break;
	
	default:
		echo "the number is none of the above";
		break;
}

?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>