<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountBalanceRetrievalResponse StructType
 * @subpackage Structs
 */
class AccountBalanceRetrievalResponse extends AbstractStructBase
{
    /**
     * The AccountBalanceRetrievalResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AccountBalanceRetrievalResult = null;
    /**
     * Constructor method for AccountBalanceRetrievalResponse
     * @uses AccountBalanceRetrievalResponse::setAccountBalanceRetrievalResult()
     * @param string $accountBalanceRetrievalResult
     */
    public function __construct(?string $accountBalanceRetrievalResult = null)
    {
        $this
            ->setAccountBalanceRetrievalResult($accountBalanceRetrievalResult);
    }
    /**
     * Get AccountBalanceRetrievalResult value
     * @return string|null
     */
    public function getAccountBalanceRetrievalResult(): ?string
    {
        return $this->AccountBalanceRetrievalResult;
    }
    /**
     * Set AccountBalanceRetrievalResult value
     * @param string $accountBalanceRetrievalResult
     * @return \StructType\AccountBalanceRetrievalResponse
     */
    public function setAccountBalanceRetrievalResult(?string $accountBalanceRetrievalResult = null): self
    {
        // validation for constraint: string
        if (!is_null($accountBalanceRetrievalResult) && !is_string($accountBalanceRetrievalResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountBalanceRetrievalResult, true), gettype($accountBalanceRetrievalResult)), __LINE__);
        }
        $this->AccountBalanceRetrievalResult = $accountBalanceRetrievalResult;
        
        return $this;
    }
}
