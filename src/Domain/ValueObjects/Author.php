<?php

namespace Vova07\Comments\Domain\ValueObjects;

use Vova07\Comments\Domain\Contracts\isAuthor;
use Vova07\DDD\Domain\ValueObjects\Object;

class Author extends Object implements isAuthor
{
    /**
     * @var mixed The name
     */
    private $name;

    /**
     * @param mixed $aName The name
     */
    public function __construct($aName)
    {
        $this->name = $aName;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }
}
