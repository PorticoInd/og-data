# OG Data

This library provides a set of interfaces which when implemented on your domain objects can be used to generate OGP data.

You can find the code example shown below in the `example` directory. 

Below is the code required to convert our 2 domain objects([Movie](https://github.com/PorticoInd/og-data/blob/master/example/Acme/Movie.php) and [Person](https://github.com/PorticoInd/og-data/blob/master/example/Acme/Person.php)) into HTML ready OGP data.

```php
<?php

use Acme\Movie;
use Acme\Person;

// Set up some auto loading
$autoloader = require __DIR__ . '/../vendor/autoload.php';
$autoloader->addPsr4('Acme\\', __DIR__ . '/Acme/');

// Create the directors and writers for our Movie
$director = new Person('Robert', 'Schwentke', 'male');
$writers = [
    new Person('Bruce',  'Rubin', 'male'),
    new Person('Audrey',  'Niffenegger', 'female'),
];

// Create our movie
$movie =  new Movie([], $director, 6480, new \DateTime('August 14, 2009'), $writers, []);


$renderer = new \Baileylo\Ogp\Render();
$properties = $renderer->render($movie);

foreach($properties as $property) {
    echo sprintf('<meta property="%s" content="%s" />', $property->property, $property->content) . PHP_EOL;
}
```

This will generate the following output:

```HTML
<meta property="og:type" content="video.movie" />
<meta property="video:duration" content="6480" />
<meta property="video:release_date" content="2009-08-14T00:00:00-0700" />
<meta property="video:director:first_name" content="Robert" />
<meta property="video:director:last_name" content="Schwentke" />
<meta property="video:director:gender" content="male" />
<meta property="video:writer:first_name" content="Bruce" />
<meta property="video:writer:last_name" content="Rubin" />
<meta property="video:writer:gender" content="male" />
<meta property="video:writer:first_name" content="Audrey" />
<meta property="video:writer:last_name" content="Niffenegger" />
<meta property="video:writer:gender" content="female" />
```