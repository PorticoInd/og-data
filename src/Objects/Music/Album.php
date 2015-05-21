<?php

namespace Baileylo\Ogp\Objects\Music;

use Baileylo\Ogp\Objects\Profile;

interface Album
{
    /**
     * The songs on this album.
     *
     * @return Song\AlbumSong[]
     */
    public function getSongs();

    /**
     * @return Profile[]
     */
    public function getMusicians();

    /**
     * The date teh album was released.
     *
     * @return \DateTimeInterface|null
     */
    public function getReleaseDate();
}
