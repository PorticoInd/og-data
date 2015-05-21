<?php

namespace Baileylo\Ogp;

use Baileylo\Ogp\Renderers\MovieRenderer;

class Render
{
    /**
     * @param $movie
     *
     * @return Property[]
     */
    public function render($movie)
    {
        return (new MovieRenderer())->render($movie);
    }
}
