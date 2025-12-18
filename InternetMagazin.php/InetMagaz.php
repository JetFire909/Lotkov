<?php
echo '<h2> Пиротехника </h2>';
$products = [
[
        'name' =>'Фонтан Золотой рассвет',
        'category' => 'Фонтаны',
        'price' => 1250,
        'brand' => 'Пиротехникс',
        'imageUrl' => 'fontan1.jpeg',
        'stock' => 15,
        'offer' => null,
],
[
        'name' => 'Фонтан Огненный дождь',
        'category' => 'Фонтаны',
        'price' => 1890,
        'brand' => 'ФайрМеджик',
        'imageUrl' => 'fontan2.jpeg',
        'stock' => 8,
        'offer' => null,
],
[
        'name' => 'Ракета Суперзвезда',
        'category' => 'Ракеты',
        'price' => 850,
        'brand' => 'StarPyro',
        'imageUrl' => 'raketa1.jpeg',
        'stock' => 25,
        'offer' => null,
],
[
        'name' => 'Ракета Серхновая',
        'category' => 'Ракеты',
        'price' => 1200,
        'brand' => 'CosmoFire',
        'imageUrl' => 'raketa2.jpeg',
        'stock' => '56',
        'offer' => null,
],
[
        'name' => 'Батарея салютов Кристалл',
        'category' => 'Батареи салютов',
        'price' => 3500,
        'brand' => 'FireMagic',
        'imageUrl' => 'batareya1.jpeg',
        'stock' => 6,
        'offer' => null,
],
[
        'name' => 'Батарея салютов Волшебный компас',
        'category' => 'Батареи салютов',
        'price' => 2800,
        'brand' => 'StarPyro',
        'imageUrl' => 'batareya2.jpeg',
        'stock' => 9,
        'offer' => null,
],
[
        'name' => 'Батарея салютов Молния',
        'category' => 'Батареи салютов',
        'price' => 3100,
        'brand' => 'StarPyro',
        'imageUrl' => 'batareya3.jpeg',
        'stock' => 6,
        'offer' => null,
],
[
        'name'=> 'Петарды Гренадер',
        'category'=> 'Петарды',
        'price'=> 450,
        'brand' => 'CosmoFire',
        'imageUrl' => 'petardi1.jpeg',
        'stock' => 35,
        'offer' => null,  
],
[
        'name'=> 'Петарды Супер кобра',
        'category'=> 'Петарды',
        'price'=> 335,
        'brand' => 'Петарды.ру',
        'imageUrl' => 'petardi2.jpeg',
        'stock' => 24,
        'offer' => null,  
],
[
        'name'=> 'Петарды Мега Заряд 10',
        'category'=> 'Петарды',
        'price'=> 290,
        'brand' => 'Петарды.ру',
        'imageUrl' => 'petardi3.jpeg',
        'stock' => 74,
        'offer' => null,  
],
];

foreach($products as $product) {
    echo $product['name'] . ' - ' . $product['category'] . ' - ' . $product['brand'] . ' - ' . $product['price'] , '<br>' ;
}

echo '<h2> Таблица </h2>';
echo "<table border='1'> ";

echo "<thead style = 'background-color:rgba(90, 88, 88, 0.32);'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Category</th>";
echo "<th>Brand</th>";
echo "<th>Price</th>";
echo "</tr>";
echo "<thead";

echo "<tbody>";
foreach ($products as $product) {
echo "<tr>";
echo "<td>" . $product["name"] . "</td>";
echo "<td>" . $product["category"] . "</td>";
echo "<td>" . $product["brand"] . "</td>";
echo "<td>" . $product["price"] . "</td>";
echo "</tr>";
}
echo "</tbody>";

echo "</table";
//
echo '<br>';
$categories = array_unique(array_column($products, 'category'));

$a = $_POST['category'] ?? '';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Товары по категории</title>
    <meta charset="utf-8">
</head>
<body>

<form method="post">
    <select name="category">
        <option value="">Выберите категорию</option>
        <?php foreach ($categories as $b): ?>
            <option <?= $a == $b ? 'selected' : '' ?>><?= $b ?></option>
        <?php endforeach; ?>
    </select>
    <button>Показать</button>
</form>

<?php
if ($a !== '') {
    $found = false;
    foreach ($products as $p) {
        if ($p['category'] === $a) {
            if (!$found) {
                echo "<h3>Товары в категории: $a</h3>";
                echo "<table border='1' cellpadding='5'>";
                echo
"<tr><th>Наименование</th><th>Категория</th><th>Бренд</th><th>Цена</th></tr>";
                $found = true;
            }
            echo "<tr>";
            echo "<td>{$p['name']}</td>";
            echo "<td>{$p['category']}</td>";
            echo "<td>{$p['brand']}</td>";
            echo "<td>{$p['price']} руб.</td>";
            echo "</tr>";
        }
    }
    if ($found) {
        echo "</table>";
    } else {
        echo "<p>В категории пока нет товаров</p>";
    }
} elseif ($_POST) {
    echo "<p>Ничего не найдено</p>";
}
?>

</body>
</html>

<!-- // задание №5 -->
<form action="">
    <p>Введите название товара<input type  ="text" name ="name"></p>
    <p><input type="submit" value="Отправить" name ="Name"></p>
</form>

<?php
if(isset($_GET["Name"])) {
    $name = $_GET["name"];
    foreach ($products as $pirotech) {
        if ($pirotech["name"] == $name) {
            $x = $pirotech;
}
}
}
?>
<?php
if(isset($x)): ?>
Имя: <?= $x['name']?> <br>
<img src="img/<?= $x['imageUrl']?>" width="200px">
Акция: <?= $x['offer']?> <br>
Цена: <?= $x['price']?> <br>
<?php else: ?>
        Товар не найден
<?php endif; ?>

