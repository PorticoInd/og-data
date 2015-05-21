<?php

namespace Baileylo\Ogp\Objects\Music\Song;

interface PlaylistSong
{
    /**
     * An array of references to objects representing each song on the playlist.
     * @return []
     */
    public function getUrl();

    /**
     * The position of the song on the playlist.
     * @return int
     */
    public function getTrack();
}
