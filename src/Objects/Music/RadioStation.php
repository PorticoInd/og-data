<?php

namespace Baileylo\Ogp\Objects\Music;

use Baileylo\Ogp\Objects\Profile;

interface RadioStation
{
    /**
     * The creator of this station.
     *
     * @return Profile;
     */
    public function getCreator();
}
