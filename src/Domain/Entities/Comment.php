<?php

namespace Vova07\Comments\Domain\Entities;

use Vova07\Comments\Domain\ValueObjects\Author;
use Vova07\DDD\Domain\Contracts\Bannable;
use Vova07\DDD\Domain\Contracts\HasTimestamp;
use Vova07\DDD\Domain\Contracts\SoftDeletable;
use Vova07\DDD\Domain\Entities\Entity;
use Vova07\DDD\Domain\Traits\BannableTrait;
use Vova07\DDD\Domain\Traits\HasTimestampTrait;
use Vova07\DDD\Domain\Traits\SoftDeletableTrait;
use Vova07\DDD\Domain\ValueObjects\ObjectId;

class Comment extends Entity implements Bannable, HasTimestamp, SoftDeletable
{
    use BannableTrait;
    use HasTimestampTrait;
    use SoftDeletableTrait;

    /**
     * @var ObjectId The parent ID
     */
    private $parentId;

    /**
     * @var Author The author
     */
    private $author;

    /**
     * @var string The content
     */
    private $content;

    /**
     * @param ObjectId $anId The ID
     * @param ObjectId $aParentId The parent ID
     * @param Author $anAuthor The author
     * @param string $aContent The content
     */
    public function __construct(ObjectId $anId, ObjectId $aParentId, Author $anAuthor, $aContent)
    {
        $this->id = $anId;
        $this->parentId = $aParentId;
        $this->author = $anAuthor;
        $this->content = $aContent;
    }
}
