<?php
$json = file_get_contents('goods.json');
$data = json_decode($json, true) ?: [];

if (!isset($data['products']) || !is_array($data['products'])) {
    $data['products'] = [];
}

if (isset($_GET['delete'])) {
    $indexToDelete = $_GET['delete'];
    if (isset($data['products'][$indexToDelete])) {
        unset($data['products'][$indexToDelete]);
        $data['products'] = array_values($data['products']);
        file_put_contents('goods.json', json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!is_numeric($_POST['price'])) {
        echo "<h3>Ошибка: цена должна быть числом!</h3>";
    } else {
        $category = trim($_POST['category_custom'] ?? '');
        if ($category == '') { $category = 'Без категории'; }
        $new_product = [
            'name'  => trim($_POST['name'] ?? ''),
            'brand' => trim($_POST['brand'] ?? ''),
            'price' => (float)$_POST['price'],
            'category' => $category,
            'offer' => trim($_POST['offer'] ?? ''),
            'imageUrl' => trim($_POST['imageUrl'] ?? ''),
            'stock' => trim($_POST['stock'] ?? '')
        ];
        $data['products'][] = $new_product;
        file_put_contents('goods.json', json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
}

$categories = [];
foreach ($data['products'] as $originalIndex => $product) {
    if (!is_array($product)) continue;
    $cat = $product['category'] ?? 'Без категории';
    $product['id'] = $originalIndex; 
    $categories[$cat][] = $product;
}
?>

<h2>Добавить новый товар</h2>
<form method="POST">
    Название: <br>
    <input type="text" name="name" required style="width:200px;"><br>
    Бренд: <br>
     <input type="text" name="brand" style="width:200px;"><br>
    Цена: <br> 
    <input type="text" name="price" required style="width:200px;"><br>
    Количество на складе: <br>
     <input type="text" name="stock" style="width:200px;"><br>
    Ссылка на картинку: <br> 
    <input type="text" name="imageUrl" style="width:200px;"><br>
    Акция: <br> 
    <input type="text" name="offer" style="width:200px;"><br>
    Своя категория: <br> <input type="text" name="category_custom" style="width:200px;"><br>
    <button type="submit">Добавить товар</button>
</form>

<?php
foreach ($categories as $cat_name => $items) {
    echo "<h3>$cat_name</h3>";

    foreach ($items as $item) {
        echo "<strong>" .($item['name']) . "</strong> ";
        echo "<a href='?delete={$item['id']}''>удалить</a><br>";
        echo "Бренд: " . ($item['brand'] ?? 'не указан') . "<br>";
        echo "Цена: " . ($item['price'])  . " руб." . "<br>";
        echo "Акция: " . ($item['offer'] ?? 'нет') . "<br>";
        echo "На складе: " . ($item['stock'] ?? 'не указано') . "<br>";
        echo "<img src=" . ($item['imageUrl']) . " style='width:150px;'><br>";
    }
}
?>
