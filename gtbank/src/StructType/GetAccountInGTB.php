<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountInGTB StructType
 * @subpackage Structs
 */
class GetAccountInGTB extends AbstractStructBase
{
    /**
     * The accountNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * Constructor method for GetAccountInGTB
     * @uses GetAccountInGTB::setAccountNo()
     * @param string $accountNo
     */
    public function __construct(?string $accountNo = null)
    {
        $this
            ->setAccountNo($accountNo);
    }
    /**
     * Get accountNo value
     * @return string|null
     */
    public function getAccountNo(): ?string
    {
        return $this->accountNo;
    }
    /**
     * Set accountNo value
     * @param string $accountNo
     * @return \StructType\GetAccountInGTB
     */
    public function setAccountNo(?string $accountNo = null): self
    {
        // validation for constraint: string
        if (!is_null($accountNo) && !is_string($accountNo)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountNo, true), gettype($accountNo)), __LINE__);
        }
        $this->accountNo = $accountNo;
        
        return $this;
    }
}
