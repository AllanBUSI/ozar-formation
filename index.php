<?php
session_start();

require "./components/header.php";
require "./components/navbar.php";
require "./components/database.php";

$connect = Connect();
$select = Select($connect);

?>

<div class="container">
   
    <div class="row mt-40">
        <?php
        foreach ($select as $row => $value) {
        ?>
            <div class="col-md-4">
                <?php
                require "./components/card.php";
                ?>
            </div>
        <?php
        }
        ?>
    </div>
</div>

<?php
require "./components/footer.php";
?>