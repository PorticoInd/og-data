<?php

namespace Baileylo\Ogp\Objects;

interface Article extends Object
{
    /**
     * When article was first published
     * @return \DateTimeInterface|null
     */
    public function getPublishedTime();

    /**
     * When the article was last changed.
     *
     * @return \DateTimeInterface|null
     */
    public function getModifiedTime();

    /**
     * When article is out of date after.
     *
     * @return \DateTimeInterface|null
     */
    public function getExpirationTime();

    /**
     * Writers of the article.
     *
     * @return Profile[]|null
     */
    public function getAuthors();

    /**
     * A high-level section name, E.g. Technology.
     *
     * @return String
     */
    public function getSection();

    /**
     * Tag words associated with this book.
     *
     * @return String[]
     */
    public function getTags();
}
