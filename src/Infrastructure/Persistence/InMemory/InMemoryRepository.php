<?php

namespace Vova07\Comments\Infrastructure\Persistence\InMemory;

use ArrayIterator;
use InvalidArgumentException;
use Vova07\Comments\Domain\Contracts\isRepository;
use Vova07\Comments\Domain\Entities\Comment;
use Vova07\Comments\Domain\ValueObjects\Author;
use Vova07\DDD\Domain\ValueObjects\ObjectId;

final class InMemoryRepository implements isRepository
{
    /**
     * @var Comment[]
     */
    private $storage = [];

    /**
     * {@inheritdoc}
     */
    public function getById(ObjectId $anId)
    {
        if (!isset($this->storage[$anId->value()])) {
            return null;
        }

        return $this->storage[$anId->value()];
    }

    /**
     * {@inheritdoc}
     */
    public function getList()
    {
        return new ArrayIterator($this->storage);
    }

    /**
     * {@inheritdoc}
     */
    public function persist(Comment $resource)
    {
        $this->storage[$resource->id()->value()] = $resource;
    }

    /**
     * {@inheritdoc}
     */
    public function remove(Comment $resource)
    {
        if (!isset($this->storage[$resource->id()->value()])) {
            throw new InvalidArgumentException('Comment cannot be deleted');
        }

        unset($this->storage[$resource->id()->value()]);
    }

    /**
     * {@inheritdoc}
     */
    public function newComment(ObjectId $anId, ObjectId $aParentId, Author $anAuthor, $aContent)
    {
        return new Comment($anId, $aParentId, $anAuthor, $aContent);
    }

    /**
     * {@inheritdoc}
     */
    public function nextIdentity()
    {
        return new ObjectId();
    }
}
