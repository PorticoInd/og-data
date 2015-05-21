<?php

namespace Baileylo\Ogp\Objects\Video;

use Baileylo\Ogp\Objects\Profile;

interface Actor extends Profile
{
    /**
     * The actor's URL
     *
     * @return Profile
     */
    public function getUrl();

    /**
     * The roles played by the actors in the movie
     * @return string[]
     */
    public function getRole();
}
