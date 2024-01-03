<?php 
    $products = array(
        array('name' => "М'ясна нарізка", 'price' => 150),
        array('name' => "Овочева нарізка", 'price' => 75),
        array('name' => "Фруктова нарізка", 'price' => 85),
        array('name' => "Сирна нарізка", 'price' => 100),
    );
?>

<div id="cold_snack" data-aos="fade-top" data-aos-delay="300" data-aos-duration="600" class="cold_snack">
    <div class="container">
        <div class="product_item">
            <div class="img_container_tablet">
                <img src="img/products/product8.png" alt="product">
            </div>
            <div class="product_item_head">
                <p class="product_item_title">Холодні нарізки</p>
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