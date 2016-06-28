<?php

namespace SaasOvation\IssueTracker\Application\Product;

use SaasOvation\IssueTracker\Domain\Model\Product\ProductId;
use SaasOvation\IssueTracker\Domain\Model\Tenant\TenantId;

class ProductApplicationService
{
    /** @var ProductRepository */
    private productRepository;


    public function __construct($productRepository)
    {
        parent::__construct();
        $this->productRepository = $productRepository;
    }

    /**
     * @param string $tenantId
     * @param string $name
     * @param string $description
     * @param string $productManagerId
     * @param string $issueAssignerId
     */
    public function createProduct(
        string $tenantId,
        string $name,
        string $description,
        string $productManagerId,
        string $issueAssignerId
    ) {
        $product = new Product(
            new TenantId(tenantId),
            new ProductId(),
            name,
            description,
            new ProductManager(productManagerId),
            new IssueAssigner(issueAssignerId)
        );

        $this->productRepository->save(product);
    }
}
