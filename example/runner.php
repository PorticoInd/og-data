<?php

/** @var  $autoloader \Composer\Autoload\ClassLoader */
use Acme\Movie;
use Acme\Person;

$autoloader = require __DIR__ . '/../vendor/autoload.php';
$autoloader->addPsr4('Acme\\', __DIR__ . '/Acme/');

$renderer = new \Baileylo\Ogp\Render();

$director = new Person('Robert', 'Schwentke', 'male');
$writers = [
    new Person('Bruce',  'Rubin', 'male'),
    new Person('Audrey',  'Niffenegger', 'female'),
];
$movie =  new Movie([], $director, 6480, new \DateTime('August 14, 2009'), $writers, []);

$properties = $renderer->render($movie);
foreach($properties as $property) {
    echo sprintf('<meta property="%s" content="%s" />', $property->property, $property->content) . PHP_EOL;
}

