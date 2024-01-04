<?php 
    $products = array(
        array('name' => "Млинці з вишнями", 'price' => 50),
        array('name' => "Млинці з сиром та родзинками", 'price' => 50),
        array('name' => "Млинці з маковою начинкою", 'price' => 50),
        array('name' => "Млинці з вишнями на пару", 'price' => 50),
        array('name' => "Сирники зі сметаною", 'price' => 60),
        array('name' => "Вареники з вишнями", 'price' => 50),
    );
?>

<div id="dessert" data-aos="fade-top" data-aos-delay="300" data-aos-duration="600" class="dessert">
    <div class="container">
        <div class="product_item">
            <div class="img_container_tablet">
                <img src="img/products/product9.webp" alt="product">
            </div>
            <div class="product_item_head">
                <p class="product_item_title">Десерти</p>
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