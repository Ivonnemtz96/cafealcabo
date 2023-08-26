<?php 
  include('indexcontroller.php');
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title = 'Contacto';
$contacto = 'active';
include('includes/head.php');
?>

<body>
    <?php 
    include('includes/preloader.php')
    ?>
    <div class="page-wrapper">
        <?php
        include('includes/header.php');
        include('includes/preloader.php');
        include($lenguaje.'/opiniones.php');
        include('includes/footer.php');
        ?>
    </div>
    <?php 
    include('includes/scripts.php');
    ?>

</body>

</html>