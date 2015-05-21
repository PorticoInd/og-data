<?php

namespace Baileylo\Ogp\Objects\Music\Song;

interface AlbumSong
{
    /**
     * Which disc of the album this song is on.
     *
     * @return Int|Null
     */
    public function getDisc();

    /**
     * The track number on the Album .
     *
     * @return Int|null
     */
    public function getTrack();
}
