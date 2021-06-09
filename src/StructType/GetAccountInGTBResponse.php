<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountInGTBResponse StructType
 * @subpackage Structs
 */
class GetAccountInGTBResponse extends AbstractStructBase
{
    /**
     * The GetAccountInGTBResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GetAccountInGTBResult = null;
    /**
     * Constructor method for GetAccountInGTBResponse
     * @uses GetAccountInGTBResponse::setGetAccountInGTBResult()
     * @param string $getAccountInGTBResult
     */
    public function __construct(?string $getAccountInGTBResult = null)
    {
        $this
            ->setGetAccountInGTBResult($getAccountInGTBResult);
    }
    /**
     * Get GetAccountInGTBResult value
     * @return string|null
     */
    public function getGetAccountInGTBResult(): ?string
    {
        return $this->GetAccountInGTBResult;
    }
    /**
     * Set GetAccountInGTBResult value
     * @param string $getAccountInGTBResult
     * @return \StructType\GetAccountInGTBResponse
     */
    public function setGetAccountInGTBResult(?string $getAccountInGTBResult = null): self
    {
        // validation for constraint: string
        if (!is_null($getAccountInGTBResult) && !is_string($getAccountInGTBResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($getAccountInGTBResult, true), gettype($getAccountInGTBResult)), __LINE__);
        }
        $this->GetAccountInGTBResult = $getAccountInGTBResult;
        
        return $this;
    }
}
