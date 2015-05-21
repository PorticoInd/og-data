<?php

namespace Baileylo\Ogp\Objects\Video;

interface Video
{
    public function getUrl();

    public function getType();

    public function getTitle();

    public function getLocale();

    public function getImage();

    public function getVideo();

    public function getAudio();

    public function getDescription();

    public function getSiteName();

    public function getDeterminer();

    public function getRestrictions();

    public function getUpdatedTime();

    public function getSeeAlso();

    public function getRichAttachment();
}
