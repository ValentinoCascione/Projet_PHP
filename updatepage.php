<?php
session_start();
include $PATHS['header'];

$res = readPost($_POST['up-2']);
?>
    <h2 class="title-create">Modifier cet article</h2>

    <form class="form-create update-form" action="updatePost" method="post">
        <input class="form-control create-title" type="text" name="title" value="<?php echo $res['title'] ?>" required>
        <div class='all-price'>
            <input class="form-control create-price" type="text" name="container" value="<?php echo $res['price'] ?>" required>
            <p class='euro-price'>€</p>
        </div>
        <input class="form-control create-img" type="text" name="image" value="<?php echo $res['image'] ?>" required>
        <input class="form-control" type="hidden" name="idPost" value="<?php echo $res['id'] ?>">
        <input class="btn btn-dark" type="submit" name="create" value="Poster">
    </form>


<?php

    include $PATHS['footer'];