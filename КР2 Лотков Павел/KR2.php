<?php

class Ad {
    protected $head;
    protected $text;
    protected $data;
    protected $views;

    public function __construct($head, $text, $data = null){
        $this->head = $head;
        $this->text = $text;
        $this->data = $data;
        $this->views = 0;
    }

    public function printAd(){
        echo "<h3>" . $this->head . "</h3>";
        echo "<p>" . $this->text . "</p>";
    }
}


class ImgAd extends Ad {
    protected $img;

    public function __construct($head, $text, $img){
        parent::__construct($head, $text);
        $this->img = $img;
    }

    public function printAd(){
        echo "<h3>"  . $this->head . "</h3>";
        echo "<p>" . $this->text . "</p>";
        echo '<img src="' . $this->img . '" width="150"><br>';
        }
    }


class BoldAd extends ImgAd{

    public function printAd(){
        echo "<hr>";
        echo "<h3>" . $this->head . "</h3>";
        echo "<p>" . $this->text . "</p>";
        if ($this->img){
            echo '<img src="' . $this->img . '" width="150"><br>';
        }
        echo "<br>";
    }
}

echo "<h2>Выполнил 7 заданий</h2>";
echo "<h2>Обьявления из файла:</h2>";
$filename = 'ads.json';

$jsonFile = file_get_contents($filename);
if(empty($jsonFile)){
    echo "Файл пустой";
    exit;
}

$ads = json_decode($jsonFile, true);
if($ads === null){
    echo "Ошибка в файле";
}

$objAds = array();
foreach($ads as $ad){
    $head = $ad['head'];
    $text = $ad['text'];

    if(isset($ad['bold']) && $ad['bold'] && isset($ad['img']))  {
        $objAds[] = new BoldAd($head,$text,$ad['img']);
    }
    elseif (isset($ad['img']) && $ad['img'] != ''){
        $objAds[]  = new ImgAd($head,$text,$ad['img']);
    }else{
        $objAds[] = new Ad($head,$text);
    }
}

foreach ($objAds as $obj){
    $obj->printAd();
}
echo "<p>Всего: " . count($objAds) . " обьявлений</p>";

