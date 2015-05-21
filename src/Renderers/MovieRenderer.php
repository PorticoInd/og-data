<?php

namespace Baileylo\Ogp\Renderers;

use Baileylo\Ogp\Objects\Profile;
use Baileylo\Ogp\Objects\Video\Actor;
use Baileylo\Ogp\Objects\Video\Movie;
use Baileylo\Ogp\Property;

class MovieRenderer
{
    public function render(Movie $movie)
    {
        $properties = array_merge(
            [
                new Property('og:type', 'video.movie'),
                new Property('video:duration', $movie->getDuration()),
                new Property('video:release_date', $movie->getReleaseDate()->format(\DateTime::ISO8601)),
            ],
            $this->getActors($movie),
            (new ProfileRenderer())->render($movie->getDirector(), 'video:director'),
            $this->getTags($movie),
            $this->getWriters($movie)
        );

        return array_filter($properties, function (Property $property) {
            return !$property->isEmpty();
        });
    }

    private function getActors(Movie $movie)
    {
        return array_map(function (Actor $actor) {
            return (new ActorRenderer)->render($actor);
        }, $movie->getActors());
    }

    private function getTags(Movie $movie)
    {
        return array_map(function ($tag) {
            return new Property('video:tag', $tag);
        }, $movie->getTags());
    }

    private function getWriters(Movie $movie)
    {
        $writers = [];
        foreach($movie->getWriters() as $writer) {
            $writers = array_merge($writers, (new ProfileRenderer())->render($writer, 'video:writer'));
        }

        return $writers;
    }
}
