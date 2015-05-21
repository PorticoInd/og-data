<?php

namespace Baileylo\Ogp;

class Property
{
    public $property;

    public $content;

    public function __construct($property, $content)
    {
        $this->property = $property;
        $this->content = $content;
    }

    public function isEmpty()
    {
        return is_null($this->content);
    }
}
