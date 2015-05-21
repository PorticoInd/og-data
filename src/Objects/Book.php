<?php

namespace Baileylo\Ogp\Objects;

interface Book extends Object
{
    /**
     * Book authors as an array of URIs.
     * The target URI is expected to have an Open Graph protocol type of 'profile'
     *
     * @return Profile[]|null
     */
    public function getAuthors();

    /**
     * International Standard Book Number, ISBN-10 or ISBN-13
     *
     * @link http://en.wikipedia.org/wiki/International_Standard_Book_Number ISBN
     * @return String|null
     */
    public function getISBN();

    /**
     * The date the book was released, or planned release if in future.
     *
     * @return \DateTimeInterface|null
     */
    public function getReleaseDate();

    /**
     * Tags describing the book content and subjects
     * @var String[]
     */
    public function getTags();
}
