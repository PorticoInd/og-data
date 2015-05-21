<?php

namespace Baileylo\Ogp\Objects\Music;

use Baileylo\Ogp\Objects\Profile;

interface Song extends AlbumSong
{
    /**
     * The song's length in seconds.
     *
     * @return Int|null
     */
    public function getDuration();

    /**
     * The album this is is from
     *
     * @return Album[]|null
     */
    public function getAlbum();

    /**
     * The musician that made this song.
     *
     * @return Profile[]|null
     */
    public function getMusician();
}
