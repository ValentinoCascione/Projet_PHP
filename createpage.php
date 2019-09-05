<?php
session_start();
include $PATHS['header'];  

if(isset($_POST['title'], $_POST['price'], $_POST['image'], $_POST['id_user'])) {
    $title = $_POST['title'];
    $price = $_POST['price'];
    $image = $_POST['image'];
    $id_user = $_POST['id_user'];
    createPost($title, $price, $image, $id_user);
    header('location:home');
}

?>

<h2 class="title-create">Poster un article</h2>

<form class="form-create create-all" action="create" method="post">
    <input class="form-control create-title" type="text" name="title" placeholder="Titre de l'article" required>
    <div class='all-price'>
        <input class="form-control create-price" type="text" name="price" placeholder="Prix" required>
        <p class='euro-price'>€</p>
    </div>
    <input class="form-control create-img" type="text" name="image" placeholder="Url de l'image" required>
    <input class="form-control" type="hidden" name="id_user" value="<?php echo $_SESSION['id']; ?>">
    <input class="create-btn" type="submit" name="create" value="Poster">
</form>
