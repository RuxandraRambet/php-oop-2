<?php
require_once __DIR__ . '/../Models/Food.php';
require_once __DIR__ . '/../Models/Kennel.php';
require_once __DIR__ . '/../Models/Toy.php';

$dogs = new Category('Cani', '<i class="fa-solid fa-dog"></i>');
$cats = new Category('Gatti',  '<i class="fa-solid fa-cat"></i>');

$products = [
    new Toy(
        "https://m.media-amazon.com/images/I/61bMeGuLmXL._AC_SX679_.jpg",
        "PAMTAM Tiragraffi",
        "44,99€",
        $cats,
        "Beige"
    ),
    new Toy(
        "https://m.media-amazon.com/images/I/71pcDs-VgbL.__AC_SX300_SY300_QL70_ML2_.jpg",
        "Ycozy Giochi per Cani",
        "20,00€",
        $dogs,
        "Multicolor"
    ),
    new Food(
        "https://m.media-amazon.com/images/I/81CWMJhWJNL.__AC_SX300_SY300_QL70_ML2_.jpg",
        "Ultima Cat",
        "24,00€",
        $cats,
        "7,5 Kg"
    ),
    new Food(
        "https://m.media-amazon.com/images/I/71fwkZg9m6L.__AC_SX300_SY300_QL70_ML2_.jpg",
        "Royal Canin Mini",
        "14,49€",
        $dogs,
        "2 Kg"
    ),
    new Kennel(
        "https://m.media-amazon.com/images/I/71P28zK35rL.__AC_SX300_SY300_QL70_ML2_.jpg",
        "Vanansa Cuccia per Gatti",
        "19,00€",
        $cats,
        "40x40x16",
        "Grigio"
    ),
    new Kennel(
        "https://m.media-amazon.com/images/I/71ID+WQODcL._AC_SY300_SX300_.jpg",
        "Lionto Letto per Cani",
        "22,95€",
        $dogs,
        "75x60",
        "Grigio/Nero"
    ),

];
