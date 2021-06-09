<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetNIPBankResponse StructType
 * @subpackage Structs
 */
class GetNIPBankResponse extends AbstractStructBase
{
    /**
     * The GetNIPBankResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\GetNIPBankResult|null
     */
    protected ?\StructType\GetNIPBankResult $GetNIPBankResult = null;
    /**
     * Constructor method for GetNIPBankResponse
     * @uses GetNIPBankResponse::setGetNIPBankResult()
     * @param \StructType\GetNIPBankResult $getNIPBankResult
     */
    public function __construct(?\StructType\GetNIPBankResult $getNIPBankResult = null)
    {
        $this
            ->setGetNIPBankResult($getNIPBankResult);
    }
    /**
     * Get GetNIPBankResult value
     * @return \StructType\GetNIPBankResult|null
     */
    public function getGetNIPBankResult(): ?\StructType\GetNIPBankResult
    {
        return $this->GetNIPBankResult;
    }
    /**
     * Set GetNIPBankResult value
     * @param \StructType\GetNIPBankResult $getNIPBankResult
     * @return \StructType\GetNIPBankResponse
     */
    public function setGetNIPBankResult(?\StructType\GetNIPBankResult $getNIPBankResult = null): self
    {
        $this->GetNIPBankResult = $getNIPBankResult;
        
        return $this;
    }
}
