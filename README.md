Project Title
Go Basic

Getting Started
These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

Para el funcionamiento tenemios que instalar
Twig necesita al menos PHP 7.2.0 para ejecutarse.

La forma recomendada de instalar Twig es a través de Composer:

Prerequisites
What things you need to install the software and how to install them
composer require "twig/twig:^3.0"
Give examples
Installing
A step by step series of examples that tell you how to get a development env running
Uso básico de la API ¶
Esta sección le ofrece una breve introducción para que cargue twig.
require_once './vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('./template');

$twig = new \Twig\Environment($loader);

echo $twig->render('news.html.twig', compact('who', 'news'));

crearmos una arraya para ver las noticias 
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

Running the tests
vamos a wampserver y abrimos el localhost y se mostrara el index principal index.php


Built With
Dropwizard - The web framework used
Maven - Dependency Management
ROME - Used to generate RSS Feeds
Contributing
Please read CONTRIBUTING.md for details on our code of conduct, and the process for submitting pull requests to us.


Authors
Robert Salazar  - Initial work - Twig