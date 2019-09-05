<?php
session_start();
include $PATHS['header'];

$db = mysqli_connect("localhost", "root", "0000", "shop_products");

if (isset($_POST["add"])) {
    if (isset($_SESSION["cart"])) {
        $item_array_id = array_column($_SESSION["cart"], "id");
            $item_array = array(
                'id' => $_POST['p_id'],
                'item_name' => $_POST['hidden-name'],
                'product_price' => $_POST['hidden-price'],
                'item_quantity' => $_POST['quantity'],
            );
            array_push($_SESSION["cart"], $item_array);
            header('location:panier');
    } else {
        $item_array = array (
            'id' => $_POST['p_id'],
            'item_name' => $_POST['hidden-name'],
            'product_price' => $_POST['hidden-price'],
            'item_quantity' => $_POST['quantity'],
        );
        $_SESSION['cart'][0] = $item_array;
    }
}








$query = "SELECT * FROM post ORDER BY id ASC";
$result = mysqli_query($db, $query);
if(mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_array($result)) { 

?>
<?php 
    }
}
?>

<div style="clear :both"></div>
<h3 class="title2">Detail du panier</h3>
<div class="table-responsive">
    <table class="table table-bordered">
    <tr>
        <th width="30%">Nom du produit</th>
        <th width="10%">Quantité</th>
        <th width="13%">Detail prix</th>
        <th width="10%">Prix total</th>
        <th width="17%">Supprimer élément</th>
    </tr>

    <?php 
    
        if(!empty($_SESSION["cart"])) {
            $total = 0;
            foreach ($_SESSION["cart"] as $key => $value) {
                ?>
        <tr>
            <td><?php echo $value["item_name"]; ?></td>
            <td><?php echo $value["item_quantity"]; ?></td>
            <td>€ <?php echo $value["product_price"]; ?></td>
            <td>€ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2) ?></td>
            <td><form method="post" action="/panier">
                <input type="hidden" value="<?php $value['id']?>">    
                <button type="submit" class="text-danger">Supprimer le produit</button>
            </form></td>

        </tr>
        <?php 
            $total = $total + ($value["item_quantity"] * $value["product_price"]);
            }
        ?>
        <tr>
            <td colspan="3" align="right">Total</td>
            <th align="right">€ <?php echo number_format($total, 2); ?></th>
            <td></td>
        </tr>
    <?php } ?>
        </table>
</div>

<?php
include $PATHS['footer'];

            
?>