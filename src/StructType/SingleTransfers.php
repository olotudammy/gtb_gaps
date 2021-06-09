<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SingleTransfers StructType
 * @subpackage Structs
 */
class SingleTransfers extends AbstractStructBase
{
    /**
     * The xmlRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $xmlRequest = null;
    /**
     * Constructor method for SingleTransfers
     * @uses SingleTransfers::setXmlRequest()
     * @param string $xmlRequest
     */
    public function __construct(?string $xmlRequest = null)
    {
        $this
            ->setXmlRequest($xmlRequest);
    }
    /**
     * Get xmlRequest value
     * @return string|null
     */
    public function getXmlRequest(): ?string
    {
        return $this->xmlRequest;
    }
    /**
     * Set xmlRequest value
     * @param string $xmlRequest
     * @return \StructType\SingleTransfers
     */
    public function setXmlRequest(?string $xmlRequest = null): self
    {
        // validation for constraint: string
        if (!is_null($xmlRequest) && !is_string($xmlRequest)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xmlRequest, true), gettype($xmlRequest)), __LINE__);
        }
        $this->xmlRequest = $xmlRequest;
        
        return $this;
    }
}
