<?php

namespace Baileylo\Ogp\Objects\Music;

use Baileylo\Ogp\Objects\Profile;

interface Playlist
{
    /**
     * The create of the playlist.
     *
     * @return Profile
     */
    public function getCreator();

    /**
     * @return Song\PlaylistSong[]
     */
    public function getSongs();

    /**
     * Number of songs on the album.
     *
     * @return int
     */
    public function getSongCount();
}
