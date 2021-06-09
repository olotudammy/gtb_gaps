<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountBalanceRetrieval StructType
 * @subpackage Structs
 */
class AccountBalanceRetrieval extends AbstractStructBase
{
    /**
     * The xmlString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $xmlString = null;
    /**
     * Constructor method for AccountBalanceRetrieval
     * @uses AccountBalanceRetrieval::setXmlString()
     * @param string $xmlString
     */
    public function __construct(?string $xmlString = null)
    {
        $this
            ->setXmlString($xmlString);
    }
    /**
     * Get xmlString value
     * @return string|null
     */
    public function getXmlString(): ?string
    {
        return $this->xmlString;
    }
    /**
     * Set xmlString value
     * @param string $xmlString
     * @return \StructType\AccountBalanceRetrieval
     */
    public function setXmlString(?string $xmlString = null): self
    {
        // validation for constraint: string
        if (!is_null($xmlString) && !is_string($xmlString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xmlString, true), gettype($xmlString)), __LINE__);
        }
        $this->xmlString = $xmlString;
        
        return $this;
    }
}
