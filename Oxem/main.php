<?php
require_once('class.php');
$MyBarn = new barn;
$MyBarn->getProduce();    //подоить коров и собрать яйца у куриц
$MyBarn->countProduce();  //посчитать произведённую продукцию
echo 'Курицы снесли '.$MyBarn->getAllEggs().' шт. яиц'.PHP_EOL;
echo 'Коровы дали '.$MyBarn->getAllMilk().' л. молока'.PHP_EOL;

