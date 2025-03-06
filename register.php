<?php
require 'components/header.php';
?>

<div class="container">
    <div class="row">
        <?php
        if (isset($_GET['error'])):
        ?>
            <div class="alert alert-danger alert-dismissible fade show" data-bs-dismiss="3000" role="alert">
                <strong>Erreur!</strong> <?= $_GET['error'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php
        endif;
        ?>
        <div class="col-md-8">
            <form action="/controller/register.php" method="post">
                <input name="email" type="email" placeholder="Email">
                <br />
                <input name="password" type="password" placeholder="Mot de passe">
                <br />
                <input type="submit" value="Valider">
            </form>
        </div>
    </div>
</div>



<?php
require 'components/footer.php';
?>