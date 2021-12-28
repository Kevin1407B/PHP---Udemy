<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">
	<aside class="col-xs-4">

	<?php Navigation();?>
						
	</aside>
	<!--SIDEBAR-->

	<article class="main-content col-xs-8">
		<pre>

		<?php  

		/*
		 *	--------------------------------------------------------
	 	 * 	Step 1 - Create a database in PHPmyadmin
		 *	// database is called section_7_php_udemy
		 *
		 *	Step 2 - Create a table like the one from the lecture
		 *	// table is called athletes
		 * 
		 *	Step 3 - Insert some Data
		 *	// id, name, age, bike
		 * 
		 *	Step 4 - Connect to Database and read data
		 *	// see code below
		 */ 
		
		$connection = mysqli_connect("localhost", "root", "", "section_7_php_udemy");
		if( !$connection ) {
			die("Connection FAILED");
		}

		$query = "SELECT * FROM athletes";
		
		$result = mysqli_query($connection, $query);
		if ( !$result ) {
			die("Query FAILED");
		}

		while( $row = mysqli_fetch_assoc($result) ) {
			print_r($row);
		}

		?>

		</pre>
</article>
<!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
