<?php 
    $products = array(
        array('name' => 'Бульйон з пельменями', 'price' => 45),
        array('name' => 'Суп з фрикадельками', 'price' => 60),
        array('name' => 'Суп овочевий', 'price' => 40),
        array('name' => 'Суп з куркою', 'price' => 60),
        array('name' => 'Солянка', 'price' => 60),
        array('name' => 'Борщ', 'price' => 50),
    );
?>

<div id="first_dish" data-aos="fade-top" data-aos-delay="300" data-aos-duration="600" class="first_dish">
    <div class="container">
        <div  class="product_item">
        <div class="img_container_tablet">
            <img src="img/products/product2.png" alt="product">
        </div>
            <div class="product_item_head">
                <p class="product_item_title">Перші страви</p>
            </div>
            <div class="product_body">

                <?php foreach ($products as $product): ?>
                    <div class="product_body_item">
                        <div>
                            <p><?php echo $product['name']; ?></p>
                        </div>
                        <div>
                            <p><?php echo $product['price']; ?> грн</p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>