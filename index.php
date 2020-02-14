<?php
require_once './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./template');
//     'index' => 'Hello {{ name }}!',
// ]);r
$twig = new \Twig\Environment($loader);
$news = Array ( 
    Array ( 
        "new" => "La NBA honra a Kobe en un All Star de nuevo formato", 
        "datetime" => date('Y-m-d'),
        "description" => "Los homenajes a la leyenda de los Lakers y los cambios en el sistema de puntuación marcarán el partido de las estrellas del domingo",
        ), 
    Array ( 
        "new" => "Gual defiende el modelo de las fundaciones como propietarias", 
        "datetime" => date('Y-m-d'),
        "description" => "El presidente de CaixaBank destaca que la gestión se basa en una visión con 'mayores horizontes temporales'", 
    ), 
    Array ( 
        "new" => "El COI no contempla el traslado de los Juegos de Tokio", 
        "datetime" => date('Y-m-d'), 
        "description" => "El organismo asegura que la mayoría de estrellas chinas están entrenando fuera de su país",
    ),
    Array ( 
        "new" => "El COI no contempla el traslado de los Juegos de Tokio", 
        "datetime" => date('Y-m-d'), 
        "description" => "El organismo asegura que la mayoría de estrellas chinas están entrenando fuera de su país",
    ), 
);
$who = "TWIG";

echo $twig->render('news.html.twig', compact('who', 'news'));