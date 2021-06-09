<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AllAccountBalancesRetrievalResponse StructType
 * @subpackage Structs
 */
class AllAccountBalancesRetrievalResponse extends AbstractStructBase
{
    /**
     * The AllAccountBalancesRetrievalResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AllAccountBalancesRetrievalResult = null;
    /**
     * Constructor method for AllAccountBalancesRetrievalResponse
     * @uses AllAccountBalancesRetrievalResponse::setAllAccountBalancesRetrievalResult()
     * @param string $allAccountBalancesRetrievalResult
     */
    public function __construct(?string $allAccountBalancesRetrievalResult = null)
    {
        $this
            ->setAllAccountBalancesRetrievalResult($allAccountBalancesRetrievalResult);
    }
    /**
     * Get AllAccountBalancesRetrievalResult value
     * @return string|null
     */
    public function getAllAccountBalancesRetrievalResult(): ?string
    {
        return $this->AllAccountBalancesRetrievalResult;
    }
    /**
     * Set AllAccountBalancesRetrievalResult value
     * @param string $allAccountBalancesRetrievalResult
     * @return \StructType\AllAccountBalancesRetrievalResponse
     */
    public function setAllAccountBalancesRetrievalResult(?string $allAccountBalancesRetrievalResult = null): self
    {
        // validation for constraint: string
        if (!is_null($allAccountBalancesRetrievalResult) && !is_string($allAccountBalancesRetrievalResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($allAccountBalancesRetrievalResult, true), gettype($allAccountBalancesRetrievalResult)), __LINE__);
        }
        $this->AllAccountBalancesRetrievalResult = $allAccountBalancesRetrievalResult;
        
        return $this;
    }
}
