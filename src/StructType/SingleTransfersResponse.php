<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SingleTransfersResponse StructType
 * @subpackage Structs
 */
class SingleTransfersResponse extends AbstractStructBase
{
    /**
     * The SingleTransfersResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $SingleTransfersResult = null;
    /**
     * Constructor method for SingleTransfersResponse
     * @uses SingleTransfersResponse::setSingleTransfersResult()
     * @param string $singleTransfersResult
     */
    public function __construct(?string $singleTransfersResult = null)
    {
        $this
            ->setSingleTransfersResult($singleTransfersResult);
    }
    /**
     * Get SingleTransfersResult value
     * @return string|null
     */
    public function getSingleTransfersResult(): ?string
    {
        return $this->SingleTransfersResult;
    }
    /**
     * Set SingleTransfersResult value
     * @param string $singleTransfersResult
     * @return \StructType\SingleTransfersResponse
     */
    public function setSingleTransfersResult(?string $singleTransfersResult = null): self
    {
        // validation for constraint: string
        if (!is_null($singleTransfersResult) && !is_string($singleTransfersResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($singleTransfersResult, true), gettype($singleTransfersResult)), __LINE__);
        }
        $this->SingleTransfersResult = $singleTransfersResult;
        
        return $this;
    }
}
