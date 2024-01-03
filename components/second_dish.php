<?php 
    $products = array(
        array('name' => 'Пельмені по домашньому', 'price' => 55),
        array('name' => 'Вареники з соленим сиром та шкварками', 'price' => 55),
        array('name' => 'Вареники з картоплею та шкварками', 'price' => 55),
        array('name' => 'Картопляне пюре', 'price' => 40),
        array('name' => 'Гречка з грибною підливою', 'price' => 50),
        array('name' => 'Відбивна куряча', 'price' => 55),
        array('name' => 'Рис з овочами', 'price' => 45),
        array('name' => 'Котлета по французьки', 'price' => 60),
        array('name' => 'Смажені пельмені у соусі  грибами', 'price' => 80),
        array('name' => 'Картопля по селянськи', 'price' => 65),
        array('name' => 'Банош з бринзою та шкварками', 'price' => 85),
        array('name' => 'Банош з бринзою', 'price' => 85),
        array('name' => 'Банош з грибами', 'price' => 85),
        array('name' => 'Картопляні крокети з грибною підливою', 'price' => 55),
        array('name' => 'Картопляні діпи', 'price' => 75),
    );
?>

<div id="second_dish" data-aos="fade-top" data-aos-delay="300" data-aos-duration="600" class="second_dish">
    <div class="container">
        <div class="product_item">
            <div class="img_container_tablet">
                <img src="img/products/second_dish_mobile.png" alt="product">
            </div>
            <div class="product_item_head">
                <p class="product_item_title">Другі страви</p>
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