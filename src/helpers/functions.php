<?php

$config = require __DIR__.'/../config/config.php';
define('BASE_PATH', $config['base_url']);
define('ASSETS_PATH', $config['assets_url']);
define('SRC_PATH', $config['src_url']);

function getProducts(){
    return[
        [
            'name'=>'Peluche Robot UltraLoco',
            'description'=>'Gran peluche del protagonista V1 proveniente del videojuego Ultrakill',
            'imgage'=>'product1.webp'
        ],
        [
            'name'=>'Playera de Mauricio',
            'description'=>'Playera de tela con retraro del enemigo Mauricio proveniente del videojuego Ultrakill',
            'imgage'=>'product2.webp'
        ],
        [
            'name'=>'Peluche Principe Cordero',
            'description'=>'Gran peluche del personaje segundario Ralsei proveniente del videojuego Deltarune',
            'imgage'=>'product3.jpg'
        ],
        [
            'name'=>'Peluche Caballerito Hueco',
            'description'=>'Gran peluche del protagonista Caballerito proveniente del videojuego Hollow Knight',
            'imgage'=>'product4.jpg'
        ],
        [
            'name'=>'Chaqueta de chaqueta',
            'description'=>'Chaqueta de tela caracteristica de la vestimenta de Jacket proveniente del videojuego Hot-line Miami',
            'imgage'=>'product5.jpg'
        ],
        [
            'name'=>'Mascara sublime',
            'description'=>'Mascara de cera caracteristica de la vestimenta de Jhin proveniente del videojuego League of Legends',
            'imgage'=>'product6.jpg'
        ]
    ];
}

?>