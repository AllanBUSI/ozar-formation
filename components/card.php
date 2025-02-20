<div class="card">
    <img src="../grandwebp.webp" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?= $value['name']; ?></h5>
        <p class="card-text"><?= $value['description'] ?></p>
        <a href=<?= "http://localhost:3000/product.php?id=".$value['id_article'] ?>  class="btn btn-primary">Go somewhere</a>
    </div>
</div>