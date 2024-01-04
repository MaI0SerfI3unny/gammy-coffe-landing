<?php 
    $products = array(
        array('name' => 'Egg бургер', 'price' => 65),
        array('name' => 'Чікен бургер', 'price' => 105),
        array('name' => 'Гамбургер', 'price' => 100),
        array('name' => 'Чізбургер', 'price' => 105),
        array('name' => 'Лаваш "Рол з салямі"', 'price' => 110),
        array('name' => 'Лаваш "Нагетс з салямі"', 'price' => 110),
        array('name' => 'Лаваш "Рол з куркою"', 'price' => 110),
        array('name' => 'Лаваш "Веган Рол"', 'price' => 110),
        array('name' => 'Лаваш "Мексикано" (гострий)', 'price' => 110),
        array('name' => 'Сендвіч "Паніні з куркою"', 'price' => 80),
        array('name' => 'Сендвіч "Паніні з салямі"', 'price' => 80),
        array('name' => 'Сендвіч "Паніні цезар"', 'price' => 80),
        array('name' => 'Хачапурі', 'price' => 90),
        array('name' => 'Хачапурі по аджарськи', 'price' => 100),
        array('name' => 'Хот-дог Барбекю', 'price' => 55),
        array('name' => 'Хот-дог', 'price' => 45),
        array('name' => 'Хот-дог "Американський"', 'price' => 45),
        array('name' => 'Курячі нагетси', 'price' => 180),
        array('name' => 'Курячі стріпси', 'price' => 150),
        array('name' => 'Шампіньйони по іспанськи', 'price' => 60),
        array('name' => 'Картопля фрі', 'price' => 70),
        array('name' => 'Бакетна дошка', 'price' => 320),
        array('name' => 'Сердечка курячі', 'price' => 150),

    );
?>

<div id="fastfood" data-aos="fade-top" data-aos-delay="300" data-aos-duration="600" class="fastfood">
    <div class="container">
        <div class="product_item_container">
            <div  class="product_item">
                <div class="img_container_tablet">
                    <img src="img/products/fastfood_mobile.webp" alt="product">
                </div>
                <div class="product_item_head">
                    <p class="product_item_title">Фастфуд</p>
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
</div>