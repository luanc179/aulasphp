<?php

require_once "Cesta.php";
require_once "Hardware.php";
require_once "Smartphone.php";
require_once "Eletronico.php";

$cesta = new Cesta();

$produto1 = new Hardware(1, "HD SSD",5 ,1225.00);
$produto2 = new Hardware(3, "Monitor",2 ,3000.00);
$produto3 = new Hardware(5, "Placa Mãe",10 ,2000.00);
$produto4 = new Hardware(7, "Placa de Vídeo",5 ,1500.00);
$produto5 = new Smartphone(9, "Iphone",3 ,10000.00);
$produto6 = new Smartphone(11, "Xiaomi",10 ,1200.00);
$produto7 = new Smartphone(13, "Samsumg",7 ,1700.00);
$produto8 = new Eletronico(15, "TV",7 ,4000.00);
$produto9 = new Hardware(17, "Som",3 ,2000.00);
$produto10 = new Hardware(19, "Memória RAM",5 ,500.00);

$cesta-> AdicionaItem($produto1);
$cesta-> AdicionaItem($produto2);
$cesta-> AdicionaItem($produto3);
$cesta-> AdicionaItem($produto4);
$cesta-> AdicionaItem($produto5);
$cesta-> AdicionaItem($produto6);
$cesta-> AdicionaItem($produto7);
$cesta-> AdicionaItem($produto8);
$cesta-> AdicionaItem($produto9);
$cesta-> AdicionaItem($produto10);

$cesta-> ExibeLista();
$cesta-> calculaTotal();