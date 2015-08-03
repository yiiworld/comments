<?php

namespace Vova07\Comments\Domain\Contracts;

use Vova07\Comments\Domain\Entities\Comment;
use Vova07\DDD\Domain\ValueObjects\ObjectId;

interface hasIdentityMap
{
    /**
     * Retrieve a comment.
     *
     * @param ObjectId $anId Entity ID
     *
     * @return Comment|null Entity instance
     */
    public static function retrieveEntity(ObjectId $anId);

    /**
     * Store a comment.
     *
     * @param Comment $aComment Entity instance
     */
    public static function storeEntity(Comment $aComment);
}
