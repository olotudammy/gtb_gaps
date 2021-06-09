<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccountInOtherBank StructType
 * @subpackage Structs
 */
class GetAccountInOtherBank extends AbstractStructBase
{
    /**
     * The bankcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $bankcode = null;
    /**
     * The accountNo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accountNo = null;
    /**
     * Constructor method for GetAccountInOtherBank
     * @uses GetAccountInOtherBank::setBankcode()
     * @uses GetAccountInOtherBank::setAccountNo()
     * @param string $bankcode
     * @param string $accountNo
     */
    public function __construct(?string $bankcode = null, ?string $accountNo = null)
    {
        $this
            ->setBankcode($bankcode)
            ->setAccountNo($accountNo);
    }
    /**
     * Get bankcode value
     * @return string|null
     */
    public function getBankcode(): ?string
    {
        return $this->bankcode;
    }
    /**
     * Set bankcode value
     * @param string $bankcode
     * @return \StructType\GetAccountInOtherBank
     */
    public function setBankcode(?string $bankcode = null): self
    {
        // validation for constraint: string
        if (!is_null($bankcode) && !is_string($bankcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($bankcode, true), gettype($bankcode)), __LINE__);
        }
        $this->bankcode = $bankcode;
        
        return $this;
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
     * @return \StructType\GetAccountInOtherBank
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
