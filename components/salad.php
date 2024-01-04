<?php 
    $products = array(
        array('name' => 'Салат з капусти', 'price' => 40),
        array('name' => 'Салат "Грецький"', 'price' => 80),
        array('name' => 'Салат "Цезар"', 'price' => 105),
        array('name' => 'Салат з бурячка', 'price' => 35),
        array('name' => 'Салат "Морква по корейськи"', 'price' => 40),
        array('name' => 'Салат "Бред"', 'price' => 85),
        array('name' => 'Салат "Дністер"', 'price' => 60),
        array('name' => 'Салат "Шопський"', 'price' => 80),
        array('name' => 'Салат "Коул Слоу"', 'price' => 40),
        array('name' => 'Салат "Венеція"', 'price' => 85),
        array('name' => 'Салат "Пекін"', 'price' => 70),
        array('name' => 'Салат "Салат з тунцем"', 'price' => 100),
        array('name' => 'Салат "Прованс"', 'price' => 85),
    );
?>

<div id="salad" data-aos="fade-top" data-aos-delay="300" data-aos-duration="600" class="salad">
    <div class="container">
        <div class="product_item">
            <div class="img_container_tablet">
                <img src="img/products/salad_mobile.webp" alt="product">
            </div>
            <div class="product_item_head">
                <p class="product_item_title">Салати</p>
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