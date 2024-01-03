<?php 
    $products = array(
        array('name' => '«Фірмова»', 'price' => "105/170/210"),
        array('name' => '«Мексикано»', 'price' => "100/130/160"),
        array('name' => '«Монтенера»', 'price' => "105/170/210"),
        array('name' => '«Капрічоза»', 'price' => "105/170/210"),
        array('name' => '«Маргарита»', 'price' => "90/120/160"),
        array('name' => '«Баварська»', 'price' => "105/170/200"),
        array('name' => '«4 сири»', 'price' => "100/170/200"),
        array('name' => '«Піца з шпинатом»', 'price' => "100/150/200"),
        array('name' => '«Піца з тунцем»', 'price' => "100/170/200"),
        array('name' => '«Кальцоне»', 'price' => "150"),
        array('name' => '«Орігамі»', 'price' => "90/150/170"),
        array('name' => '«Вегетеріано»', 'price' => "90/130/170"),
        array('name' => '«Пінца»', 'price' => "100"),
        array('name' => '«Фруктова»', 'price' => "90/120/160"),
    );
?>

<div id="pizza" data-aos="fade-top" data-aos-delay="300" data-aos-duration="600" class="pizza">
    <div class="container">
        <div class="product_item">
            <div class="img_container_tablet">
                <img src="img/products/pizza_mobile.png" alt="product">
            </div>
            <div class="product_item_head">
                <p class="product_item_title">Піца</p>
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