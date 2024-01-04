<?php 
    $products = array(
        array('name' => "Американо", 'price' => 22),
        array('name' => "Американо з молоком", 'price' => 30),
        array('name' => "Еспрессо", 'price' => 22),
        array('name' => "Еспрессо з молоком", 'price' => 28),
        array('name' => "Капучіно", 'price' => 38),
        array('name' => "Латте", 'price' => 42),
        array('name' => "Латте XL", 'price' => 55),
        array('name' => "Гарячий шоколад", 'price' => 40),
        array('name' => "Кава розчинна у стіках", 'price' => 20),
        array('name' => "Кава Maccoffe", 'price' => 20),
        array('name' => "Чай в пакетиках Greenfield", 'price' => 17),
        array('name' => "Чай на травах", 'price' => 35),
    );
?>

<div data-aos="fade-top" data-aos-delay="300" data-aos-duration="600" class="hot_drink">
    <div class="container">
        <div class="product_item">
            <div class="img_container_tablet">
                <img src="img/products/product10.webp" alt="product">
            </div>
            <div class="product_item_head">
                <p class="product_item_title">Гарячі напої</p>
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