<?php declare( strict_types = 1 );

use function PHPSTORM_META\type;

?>
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

<section class="content">
	<aside class="col-xs-4">

		<?php Navigation();?>
			
	</aside>
	<!--SIDEBAR-->
	<article class="main-content col-xs-8">

	
		<?php  

		/*  
		*	-----------------------------------------------------
		*	Step 1: Use the Make a class called Dog
		*
		*	Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color
		* 
		*	Step 3: Make a method named ShowAll that echos all the properties
		* 
		*	Step 4: Instantiate the class / create object and call it pitbull
		* 
		*	Step 5: Call the method ShowAll
		*/
			
		class Dog {

			private string $eyeColor;
			private int $eyes;
			private int $noses;
			private string $furColor;
			private array $data;

			public function __construct(string $eyeColor, string $furColor) {
				$this -> eyeColor = $eyeColor;
				$this -> eyes = 2;
				$this -> noses = 1;
				$this -> furColor = $furColor;
				$this -> data = [];
			}

			public function showAll() :array {
				$tempArray = $this -> data;
				$tempArray.array_push(
					$tempArray,
					$this -> eyeColor,
					$this -> eyes,
					$this -> noses,
					$this -> furColor
				);
				return $tempArray;
			}
		}

		$pitbull = new Dog("green", "brown");
		echo "<pre>";
		print_r($pitbull -> showAll());
		echo "</pre>";
		
		?>

	</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>