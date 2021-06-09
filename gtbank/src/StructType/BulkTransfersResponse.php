<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BulkTransfersResponse StructType
 * @subpackage Structs
 */
class BulkTransfersResponse extends AbstractStructBase
{
    /**
     * The BulkTransfersResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $BulkTransfersResult = null;
    /**
     * Constructor method for BulkTransfersResponse
     * @uses BulkTransfersResponse::setBulkTransfersResult()
     * @param string $bulkTransfersResult
     */
    public function __construct(?string $bulkTransfersResult = null)
    {
        $this
            ->setBulkTransfersResult($bulkTransfersResult);
    }
    /**
     * Get BulkTransfersResult value
     * @return string|null
     */
    public function getBulkTransfersResult(): ?string
    {
        return $this->BulkTransfersResult;
    }
    /**
     * Set BulkTransfersResult value
     * @param string $bulkTransfersResult
     * @return \StructType\BulkTransfersResponse
     */
    public function setBulkTransfersResult(?string $bulkTransfersResult = null): self
    {
        // validation for constraint: string
        if (!is_null($bulkTransfersResult) && !is_string($bulkTransfersResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bulkTransfersResult, true), gettype($bulkTransfersResult)), __LINE__);
        }
        $this->BulkTransfersResult = $bulkTransfersResult;
        
        return $this;
    }
}
