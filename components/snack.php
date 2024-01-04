<?php 
    $products = array(
        array('name' => '"Вуха" до пива', 'price' => 65),
        array('name' => 'Сир "Косичка"', 'price' => 60),
        array('name' => 'Крильця "Баффало"', 'price' => 200),
        array('name' => 'Сирні кульки', 'price' => 60),
        array('name' => 'Фокачча', 'price' => 50),
        array('name' => 'Дошка до пива', 'price' => 300),
    );
?>

<div data-aos="fade-top" data-aos-delay="300" data-aos-duration="600" class="snack">
    <div class="container">
        <div id="snack" class="product_item">
        <div class="img_container_tablet">
                <img src="img/products/product8.webp" alt="product">
            </div>
            <div class="product_item_head">
                <p class="product_item_title">Фірмові закуски</p>
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