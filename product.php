<?php
    require "./components/header.php";
    require "./components/navbar.php";
    require "./components/database.php";

    $connect = Connect();

    $one = FindBy($connect, $_GET['id']);

    $one = $one[0];
?>

<div class="container">
    <div class="row mt-40">
        <div class="col-md-12">
            <?php
                require "./components/one_card.php";
            ?>
        </div>
    </div>
</div>

<?php
    require "./components/footer.php";
?>