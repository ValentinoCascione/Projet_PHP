<?php 

function showTab($rows) {
    ?>
    <div class='all-cards'>
    <?php foreach ($rows as $row) { ?>
        <div class="card">
          <?php echo "<img src='".$row["image"]."' class='card-img-top' >" ?>
          <?php echo "<h4 class='card-title'>" . $row["title"] . "</h4>" ?>
          <?php echo "<p class='card-text'>" . number_format($row["price"],2, ',', ' ') . " €</p>" ?>
           <?php 
             if ($_SESSION['admin'] || $_SESSION['id'] == $row['id_user']) {
           ?>
           <div class='btns'> 
            <?php echo "<form action='delete' class='del' method='POST'>" ?>
              <?php echo "<input name='del-1' type='submit' class='btn btn-danger' value='D'>" ?>
              <?php echo "<input name='del-2' type='hidden' value='" . $row["id"] . "'>" ?>
            <?php echo "</form>" ?>

            <?php echo "<form action='update' class='del' method='POST'>" ?>
              <?php echo "<input name='up' type='submit' class='btn btn-success' value='M'>" ?>
              <?php echo "<input name='up-2' type='hidden' value='" . $row["id"] . "'>" ?>
            <?php echo "</form>" ?>

              <form method='post' action="/panier">
                <div class='product'>
                  <input type="text" name='quantity' class='form-control quantity-cart' value="1">
                  <input type="hidden" name='hidden-name' value='<?php echo $row["title"] ?>'>
                  <input type="hidden" name='p_id' value='<?php echo $row["id"] ?>'>
                  <input type="hidden" name='hidden-price' value='<?php echo $row["price"] ?>'>
                  <input type="submit" name='add' value='A' class="btn btn-primary">
                </div>
              </form>
          </div>
             <?php } ?>
        </div>
      <?php } ?>
      </div>
  <?php
}

?>

<!-- <div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div> -->