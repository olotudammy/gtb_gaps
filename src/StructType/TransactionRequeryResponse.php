<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TransactionRequeryResponse StructType
 * @subpackage Structs
 */
class TransactionRequeryResponse extends AbstractStructBase
{
    /**
     * The TransactionRequeryResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $TransactionRequeryResult = null;
    /**
     * Constructor method for TransactionRequeryResponse
     * @uses TransactionRequeryResponse::setTransactionRequeryResult()
     * @param string $transactionRequeryResult
     */
    public function __construct(?string $transactionRequeryResult = null)
    {
        $this
            ->setTransactionRequeryResult($transactionRequeryResult);
    }
    /**
     * Get TransactionRequeryResult value
     * @return string|null
     */
    public function getTransactionRequeryResult(): ?string
    {
        return $this->TransactionRequeryResult;
    }
    /**
     * Set TransactionRequeryResult value
     * @param string $transactionRequeryResult
     * @return \StructType\TransactionRequeryResponse
     */
    public function setTransactionRequeryResult(?string $transactionRequeryResult = null): self
    {
        // validation for constraint: string
        if (!is_null($transactionRequeryResult) && !is_string($transactionRequeryResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($transactionRequeryResult, true), gettype($transactionRequeryResult)), __LINE__);
        }
        $this->TransactionRequeryResult = $transactionRequeryResult;
        
        return $this;
    }
}
