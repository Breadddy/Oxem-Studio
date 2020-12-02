<?php
require_once('class.php');
$MyBarn = new barn;
$MyBarn->addAnimals(20, 'chicken'); //добавить новых животных в амбар
$MyBarn->addAnimals(10, 'cow');
$MyBarn->getProduce();    //получить продукцию со всех животных
echo 'Курицы снесли '.$MyBarn->countAnimalProduce('chicken').' шт. яиц'.PHP_EOL;
echo 'Коровы дали '.$MyBarn->countAnimalProduce('cow').' л. молока'.PHP_EOL;

