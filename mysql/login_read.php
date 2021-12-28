<?php include "db.php" ?>
<?php include "functions.php" ?>


<?php include "includes/header.php" ?>

<div class="container">
  <div class="col-sm-6">
    <h2 class="text-center">Read</h2>
    <pre>

      <?php readRows(); ?>

    </pre>
  </div>
</div>  

<?php include "includes/footer.php" ?>