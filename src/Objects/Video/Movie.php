<?php

namespace Baileylo\Ogp\Objects\Video;

use Baileylo\Ogp\Objects\Profile;

interface Movie
{
    /**
     * @return Actor[]
     */
    public function getActors();

    /**
     * @return Profile
     */
    public function getDirector();

    /**
     * The length of the movie in seconds.
     *
     * @return int
     */
    public function getDuration();

    /**
     * A time representing when the movie was released.
     *
     * @return \DateTimeInterface
     */
    public function getReleaseDate();

    /**
     * A list of keywords relevant to the movie.
     * @return string[]
     */
    public function getTags();

    /**
     * @return Profile[]
     */
    public function getWriters();
}
