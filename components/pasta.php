<?php 
    $products = array(
        array('name' => 'З куркою, шампіньйонами у вершковому соусі та сиром "Пармезан"', 'price' => 75),
        array('name' => 'З тунцем та соусом "Песта"', 'price' => 75),
    );
?>

<div id="pasta" data-aos="fade-top" data-aos-delay="300" data-aos-duration="600" class="pasta">
    <div class="container">
        <div class="product_item">
            <div class="img_container_tablet">
                <img src="img/products/pasta.webp" alt="product">
            </div>
            <div class="product_item_head">
                <p class="product_item_title">Пасти</p>
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