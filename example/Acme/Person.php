<?php

namespace Acme;

use Baileylo\Ogp\Objects\Profile;

class Person implements Profile
{

    /** @var string */
    private $first;

    /** @var string */
    private $last;

    /** @var string */
    private $gender;

    public function __construct($first, $last, $gender)
    {
        $this->first = $first;
        $this->last = $last;
        $this->gender = $gender;
    }

    /**
     * A name normally given to an individual by a parent or self-chosen.
     *
     * @return String|null
     */
    public function getFirstName()
    {
        return $this->first;
    }

    /**
     * A name inherited from a family or marriage and by which the individual is commonly known.
     *
     * @return String|null
     */
    public function getLastName()
    {
        return $this->last;
    }

    /**
     * Their gender
     *
     * @return String|null Either female or male
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * A short unique string to identify them.
     *
     * @return string|null
     */
    public function getUsername()
    {
        return null;
    }
}
