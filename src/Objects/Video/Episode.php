<?php

namespace Baileylo\Ogp\Objects\Video;

interface Episode extends Movie
{
    /**
     * @return TvShow
     */
    public function getSeries();
}
