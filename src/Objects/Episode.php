<?php

namespace Baileylo\Ogp\Objects;

interface Episode extends Video
{
    /**
     * @return String URL of a video.tv_show which this episode belongs to
     */
    public function getSeries();
}
