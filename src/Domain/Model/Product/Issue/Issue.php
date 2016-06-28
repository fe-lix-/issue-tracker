<?php

namespace SaasOvation\IssueTracker\Domain\Model\Product\Issue;

use SaasOvation\IssueTracker\Domain\Model\Product\ProductId;
use SaasOvation\IssueTracker\Domain\Model\Tenant\TenantId;

class Issue
{
    /**
     * @var TenantId
     */
    private $tenantId;
    /**
     * @var ProductId
     */
    private $productId;
    /**
     * @var IssueId
     */
    private $issueId;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $summary;
    /**
     * @var string
     */
    private $type;
    /**
     * @var string
     */
    private $severity;

    public function __construct(
        TenantId $tenantId,
        ProductId $productId,
        IssueId $issueId,
        string $description,
        string $summary,
        string $type,
        string $severity
    ) {
        $this->tenantId = $tenantId;
        $this->productId = $productId;
        $this->issueId = $issueId;
        $this->description = $description;
        $this->summary = $summary;
        $this->type = $type;
        $this->severity = $severity;
    }
}
