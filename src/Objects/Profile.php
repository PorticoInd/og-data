<?php

namespace Baileylo\Ogp\Objects;

interface Profile extends Object
{
    /**
     * A name normally given to an individual by a parent or self-chosen.
     *
     * @return String|null
     */
    public function getFirstName();

    /**
     * A name inherited from a family or marriage and by which the individual is commonly known.
     *
     * @return String|null
     */
    public function getLastName();

    /**
     * A short unique string to identify them.
     *
     * @return string|null
     */
    public function getUsername();

    /**
     * Their gender
     *
     * @return String|null Either female or male
     */
    public function getGender();

}
