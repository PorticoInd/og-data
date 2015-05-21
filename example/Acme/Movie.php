<?php

namespace Acme;

use Baileylo\Ogp\Objects\Profile;
use Baileylo\Ogp\Objects\Video\Actor;

class Movie implements \Baileylo\Ogp\Objects\Video\Movie
{
    use Root;

    /** @var array */
    private $actors;

    /** @var Person */
    private $director;

    /** @var int time in seconds */
    private $duration;

    /** @var \DateTimeInterface */
    private $releaseDate;

    /** @var array */
    private $writers;

    /** @var array */
    private $tags;

    public function __construct(array $actors, Person $director, $duration, \DateTimeInterface $releaseDate, array $writers, array $tags)
    {
        $this->actors = $actors;
        $this->director = $director;
        $this->duration = $duration;
        $this->releaseDate = $releaseDate;
        $this->writers = $writers;
        $this->tags = $tags;
    }

    /**
     * @return Actor[]
     */
    public function getActors()
    {
        return $this->actors;
    }

    /**
     * @return Profile
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * The length of the movie in seconds.
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * A time representing when the movie was released.
     *
     * @return \DateTimeInterface
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * A list of keywords relevant to the movie.
     * @return string[]
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @return Profile[]
     */
    public function getWriters()
    {
        return $this->writers;
    }
}
