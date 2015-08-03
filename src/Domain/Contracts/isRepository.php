<?php

namespace Vova07\Comments\Domain\Contracts;

use Vova07\Comments\Domain\Entities\Comment;
use Vova07\Comments\Domain\ValueObjects\Author;
use Vova07\DDD\Domain\ValueObjects\ObjectId;

interface isRepository
{
    /**
     * Get comment by ID.
     *
     * @param ObjectId $anId Comment ID
     *
     * @return Comment Comment instance
     */
    public function getById(ObjectId $anId);

    /**
     * Get comment list.
     *
     * @return Comment[]
     */
    public function getList();

    /**
     * Save the comment.
     *
     * @param Comment $resource Resource instance
     *
     * @return bool
     */
    public function persist(Comment $resource);

    /**
     * Remove the comment.
     *
     * @param Comment $resource Resource instance
     *
     * @return bool
     */
    public function remove(Comment $resource);

    /**
     * Create new comment.
     *
     * @param ObjectId $anId The ID
     * @param ObjectId $aParentId The parent ID
     * @param Author $anAuthor The author
     * @param string $aContent The content
     *
     * @return Comment New comment instance
     */
    public function newComment(ObjectId $anId, ObjectId $aParentId, Author $anAuthor, $aContent);

    /**
     * Return next identity.
     *
     * @return ObjectId
     */
    public function nextIdentity();
}
