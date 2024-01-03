<?php 
    $products = array(
        array('name' => 'Вівсяна каша з родзинками', 'price' => 35),
        array('name' => 'Манна каша', 'price' => 30),
        array('name' => 'Гречка з овочами', 'price' => 40),
        array('name' => 'Творожний лаваш з овочами', 'price' => 65),
        array('name' => 'Макарони з пармезаном та квашеним огірком', 'price' => 50),
        array('name' => 'Сендвіч з шинкою', 'price' => 40),
        array('name' => 'Сирники зі сметаною', 'price' => 60),
        array('name' => 'Яєчня "Козацька"', 'price' => 55),
        array('name' => 'Яєчня з овочами', 'price' => 50),
    );
?>

<section id="lunch" class="products" id="products">
    <div data-aos="fade-top" data-aos-delay="300" data-aos-duration="600" class="starter_menu">
    <div class="container">
        <h2>Меню</h2>
        <div class="product_item">
            <div class="img_container_tablet">
                <img src="img/products/product1.png" alt="product">
            </div>
            <div class="product_item_head">
                <p class="product_item_title">Сніданки</p>
                <div class="product_item_attention">
                    <img src="img/icons/time.svg" alt="time">
                    <p class="product_item_attention_desc">Сніданки доступні з 9:00 по 12:00</p>
                </div>
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