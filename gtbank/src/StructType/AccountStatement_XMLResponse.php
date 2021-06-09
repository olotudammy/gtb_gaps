<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AccountStatement_XMLResponse StructType
 * @subpackage Structs
 */
class AccountStatement_XMLResponse extends AbstractStructBase
{
    /**
     * The AccountStatement_XMLResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AccountStatement_XMLResult = null;
    /**
     * Constructor method for AccountStatement_XMLResponse
     * @uses AccountStatement_XMLResponse::setAccountStatement_XMLResult()
     * @param string $accountStatement_XMLResult
     */
    public function __construct(?string $accountStatement_XMLResult = null)
    {
        $this
            ->setAccountStatement_XMLResult($accountStatement_XMLResult);
    }
    /**
     * Get AccountStatement_XMLResult value
     * @return string|null
     */
    public function getAccountStatement_XMLResult(): ?string
    {
        return $this->AccountStatement_XMLResult;
    }
    /**
     * Set AccountStatement_XMLResult value
     * @param string $accountStatement_XMLResult
     * @return \StructType\AccountStatement_XMLResponse
     */
    public function setAccountStatement_XMLResult(?string $accountStatement_XMLResult = null): self
    {
        // validation for constraint: string
        if (!is_null($accountStatement_XMLResult) && !is_string($accountStatement_XMLResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountStatement_XMLResult, true), gettype($accountStatement_XMLResult)), __LINE__);
        }
        $this->AccountStatement_XMLResult = $accountStatement_XMLResult;
        
        return $this;
    }
}
