<?
$product1 = "Пила"; 
$product2 = "Шпатель";
$product3 = "Отвертка";
$product4 = "Молоток";
$product5 = "Шуруповерт";
$product6 = "Краска зеленая";
$product7 = "Гвозди";
$product8 = "Клей";
$product9 = "Кирпич";
$product10 = "Цемент";
$product11 = "Рулетка";
$product12 = "Дрель";
$product13 = "Перфоратор";
$product14 = "Люстра";
$product15 = "Линолеум";
$price1 = 250;
$price2 = 135;
$price3 = 205;
$price4 = 160;
$price5 = 495;
$price6 = 100;
$price7 = 20;
$price8 = 75;
$price9 = 215;
$price10 = 125;
$price11 = 90;
$price12 = 365;
$price13 = 245;
$price14 = 1080;
$price15 = 750;
$products = [$product1, $product2, $product3, $product4, $product5, $product6, $product7, $product8, $product9, $product10, $product11, $product12, $product13, $product14, $product15];
$prices = [$price1, $price2, $price3, $price4, $price5, $price6, $price7, $price8, $price9, $price10, $price11, $price12, $price13, $price14, $price15];

$products2 = ["Обои", "Ванна", "Смеситель", "Бетон", "Радиатор", "Угольник", "Фен строительный", "Штангенциркуль", "Перчатки", "Пластиковые окна", "Полиэтилен", "Гипсокартон", "Плинтус"];
$prices2 = [190, 4000, 5000, 790, 1015, 200, 1200, 990, 105, 15500, 1300, 1500, 1800];

$items[] = ['Краска белая', 170];
$items[] = ['Саморезы', 30];
$items[] = ['Миксер', 5400];
$items[] = ['Электропила', 6000];
$items[] = ['Входная дверь', 10000];
$items[] = ['Натяжной потолок', 20000];
$items[] = ['Раковина', 8800];
$items[] = ['Унитаз', 11000];
$items[] = ['Душевая кабина',25000];
$items[] = ['Конвектор', 2000];

$goods[] = ['name' => 'Камера', 'price' => 30000];
$goods[] = ['name' => 'Видеорегистратор', 'price' => 15000];
$goods[] = ['name' => 'Система мониторинга', 'price' =>25000];
$goods[] = ['name' => 'Провода', 'price' => 650];
$goods[] = ['name' => 'Розетка', 'price' => 125];
$goods[] = ['name' => 'Воздуховод', 'price' => 10000];
$goods[] = ['name' => 'Рекуператор', 'price' => 12500];
$goods[] = ['name' => 'Рубероид', 'price' => 5400];
$goods[] = ['name' => 'Мембрана', 'price' => 5600];
$goods[] = ['name' => 'Пенопласт', 'price' => 5800];

$goodsRandom = [];
$allProducts = array_merge($products, $products2);
$allPrices = array_merge($prices, $prices2);

for ($i = 0; $i < 45; $i++) {
    $randomIndex = array_rand($allProducts);
    $goodsRandom[] = [
        "name" => $allProducts[$randomIndex],
        "price" => $allPrices[$randomIndex]
    ];
}

?>


<div class="product-list">
    <h2>Товары и цены</h3>

    <?php for ($i = 0; $i < count($products); $i++) { ?>
        <div class="product-card">
            <div class="product-name"><?= $products[$i]?></div>
            <div class="product-price"><?= $prices[$i]?></div>
        </div>
    <?php } ?>
</div>


<div class="product-list">
    <h2>Товары и цены 2 </h3>

    <?php for ($i = 0; $i < count($products2); $i++) { ?>
        <div class="product-card">
            <div class="product-name"><?= $products2[$i]?></div>
            <div class="product-price"><?= $prices2[$i]?></div>
        </div>
    <?php } ?>
</div>


<div class="product-list">
    <h2>Товары и цены 3 </h3>

    <?php foreach ($items as $item) { ?>
        <div class="product-card">
            <div class="product-name"><?= $item[0]?></div>
            <div class="product-price"><?= $item[1]?></div>
        </div>
    <?php } ?>
</div>


<div class="product-list">
    <h2>Товары и цены 4 </h3>

    <?php foreach ($goods as $item) { ?>
        <div class="product-card">
            <div class="product-name"><?= $item['name']?></div>
            <div class="product-price"><?= $item['price']?></div>
        </div>
    <?php } ?>
</div>


<div class="product-list">;
    <h2>Случайные товары </h3>
<?php foreach ($goodsRandom as $item) { ?>
        <div class="product-card">
            <div class="product-name"><?= $item['name']?></div>
            <div class="product-price"><?= $item['price']?></div>
        </div>
    <?php } ?>
</div>


 <h3>Товары дороже 100 рублей </h3>
<div class="product-list">
 <?php foreach ($goodsRandom as $item) { ?>
        <div class="product-card">
            <div class="product-name"><?= $item['name']?></div>
            <div class="product-price"><?= $item['price']?></div>
        </div>
    <?php } ?>
</div>   



<h3>Товары дороже 1000 рублей </h3>
<div class="product-list">
    <?php foreach ($goodsRandom as $item) { ?>
        <div class="product-card">
            <div class="product-name"><?= $item['name']?></div>
            <div class="product-price"><?= $item['price']?></div>
        </div>
    <?php } ?>
</div>   



<h3>Товары от 100 до 1000 рублей </h3>
<div class="product-list">
<?php foreach ($goodsRandom as $item) { ?>
        <div class="product-card">
            <div class="product-name"><?= $item['name']?></div>
            <div class="product-price"><?= $item['price']?></div>
        </div>
    <?php } ?>
</div>   