<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountInOtherBankResponse StructType
 * @subpackage Structs
 */
class GetAccountInOtherBankResponse extends AbstractStructBase
{
    /**
     * The GetAccountInOtherBankResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $GetAccountInOtherBankResult = null;
    /**
     * Constructor method for GetAccountInOtherBankResponse
     * @uses GetAccountInOtherBankResponse::setGetAccountInOtherBankResult()
     * @param string $getAccountInOtherBankResult
     */
    public function __construct(?string $getAccountInOtherBankResult = null)
    {
        $this
            ->setGetAccountInOtherBankResult($getAccountInOtherBankResult);
    }
    /**
     * Get GetAccountInOtherBankResult value
     * @return string|null
     */
    public function getGetAccountInOtherBankResult(): ?string
    {
        return $this->GetAccountInOtherBankResult;
    }
    /**
     * Set GetAccountInOtherBankResult value
     * @param string $getAccountInOtherBankResult
     * @return \StructType\GetAccountInOtherBankResponse
     */
    public function setGetAccountInOtherBankResult(?string $getAccountInOtherBankResult = null): self
    {
        // validation for constraint: string
        if (!is_null($getAccountInOtherBankResult) && !is_string($getAccountInOtherBankResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($getAccountInOtherBankResult, true), gettype($getAccountInOtherBankResult)), __LINE__);
        }
        $this->GetAccountInOtherBankResult = $getAccountInOtherBankResult;
        
        return $this;
    }
}
