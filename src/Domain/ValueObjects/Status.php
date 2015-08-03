<?php

namespace Vova07\Comments\Domain\ValueObjects;

use Vova07\DDD\Domain\ValueObjects\Object;

class Status extends Object
{
    /** Approved */
    const APPROVED = 'approved';
    /** Declined */
    const DECLINED = 'declined';
    /** Pending */
    const PENDING = 'pending';
}
