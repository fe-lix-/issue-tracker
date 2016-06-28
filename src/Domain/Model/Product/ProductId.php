<?php

namespace SaasOvation\IssueTracker\Domain\Model\Product;

use Ramsey\Uuid\Uuid;

class ProductId
{
    /** @var string */
    private $id;

    public function __construct()
    {
        parent::__construct();

        $this->id = strtoupper(Uuid::uuid1()->toString());
    }

    public function getId()
    {
        return $this->id;
    }
}
