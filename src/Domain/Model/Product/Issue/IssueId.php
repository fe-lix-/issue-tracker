<?php

namespace SaasOvation\IssueTracker\Domain\Model\Product\Issue;

use Ramsey\Uuid\Uuid;

class IssueId
{
    /** @var string */
    private $id;

    public function __construct()
    {
        $this->id = strtoupper(Uuid::uuid1()->toString());
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
}
