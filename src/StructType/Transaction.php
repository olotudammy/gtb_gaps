<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Transaction StructType
 * @subpackage Structs
 */
class Transaction extends AbstractStructBase
{
    /**
     * The Amount
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var float
     */
    protected float $Amount;
    /**
     * The Paymentdate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $Paymentdate;
    /**
     * The Reference
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Reference = null;
    /**
     * The Remarks
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Remarks = null;
    /**
     * The Vendorcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Vendorcode = null;
    /**
     * The Vendorname
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Vendorname = null;
    /**
     * The Vendoracctnumber
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Vendoracctnumber = null;
    /**
     * The Vendorbankcode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Vendorbankcode = null;
    /**
     * The Hash
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Hash = null;
    /**
     * Constructor method for Transaction
     * @uses Transaction::setAmount()
     * @uses Transaction::setPaymentdate()
     * @uses Transaction::setReference()
     * @uses Transaction::setRemarks()
     * @uses Transaction::setVendorcode()
     * @uses Transaction::setVendorname()
     * @uses Transaction::setVendoracctnumber()
     * @uses Transaction::setVendorbankcode()
     * @uses Transaction::setHash()
     * @param float $amount
     * @param string $paymentdate
     * @param string $reference
     * @param string $remarks
     * @param string $vendorcode
     * @param string $vendorname
     * @param string $vendoracctnumber
     * @param string $vendorbankcode
     * @param string $hash
     */
    public function __construct(float $amount, string $paymentdate, ?string $reference = null, ?string $remarks = null, ?string $vendorcode = null, ?string $vendorname = null, ?string $vendoracctnumber = null, ?string $vendorbankcode = null, ?string $hash = null)
    {
        $this
            ->setAmount($amount)
            ->setPaymentdate($paymentdate)
            ->setReference($reference)
            ->setRemarks($remarks)
            ->setVendorcode($vendorcode)
            ->setVendorname($vendorname)
            ->setVendoracctnumber($vendoracctnumber)
            ->setVendorbankcode($vendorbankcode)
            ->setHash($hash);
    }
    /**
     * Get Amount value
     * @return float
     */
    public function getAmount(): float
    {
        return $this->Amount;
    }
    /**
     * Set Amount value
     * @param float $amount
     * @return \StructType\Transaction
     */
    public function setAmount(float $amount): self
    {
        // validation for constraint: float
        if (!is_null($amount) && !(is_float($amount) || is_numeric($amount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($amount, true), gettype($amount)), __LINE__);
        }
        $this->Amount = $amount;
        
        return $this;
    }
    /**
     * Get Paymentdate value
     * @return string
     */
    public function getPaymentdate(): string
    {
        return $this->Paymentdate;
    }
    /**
     * Set Paymentdate value
     * @param string $paymentdate
     * @return \StructType\Transaction
     */
    public function setPaymentdate(string $paymentdate): self
    {
        // validation for constraint: string
        if (!is_null($paymentdate) && !is_string($paymentdate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentdate, true), gettype($paymentdate)), __LINE__);
        }
        $this->Paymentdate = $paymentdate;
        
        return $this;
    }
    /**
     * Get Reference value
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @param string $reference
     * @return \StructType\Transaction
     */
    public function setReference(?string $reference = null): self
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
        }
        $this->Reference = $reference;
        
        return $this;
    }
    /**
     * Get Remarks value
     * @return string|null
     */
    public function getRemarks(): ?string
    {
        return $this->Remarks;
    }
    /**
     * Set Remarks value
     * @param string $remarks
     * @return \StructType\Transaction
     */
    public function setRemarks(?string $remarks = null): self
    {
        // validation for constraint: string
        if (!is_null($remarks) && !is_string($remarks)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($remarks, true), gettype($remarks)), __LINE__);
        }
        $this->Remarks = $remarks;
        
        return $this;
    }
    /**
     * Get Vendorcode value
     * @return string|null
     */
    public function getVendorcode(): ?string
    {
        return $this->Vendorcode;
    }
    /**
     * Set Vendorcode value
     * @param string $vendorcode
     * @return \StructType\Transaction
     */
    public function setVendorcode(?string $vendorcode = null): self
    {
        // validation for constraint: string
        if (!is_null($vendorcode) && !is_string($vendorcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorcode, true), gettype($vendorcode)), __LINE__);
        }
        $this->Vendorcode = $vendorcode;
        
        return $this;
    }
    /**
     * Get Vendorname value
     * @return string|null
     */
    public function getVendorname(): ?string
    {
        return $this->Vendorname;
    }
    /**
     * Set Vendorname value
     * @param string $vendorname
     * @return \StructType\Transaction
     */
    public function setVendorname(?string $vendorname = null): self
    {
        // validation for constraint: string
        if (!is_null($vendorname) && !is_string($vendorname)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorname, true), gettype($vendorname)), __LINE__);
        }
        $this->Vendorname = $vendorname;
        
        return $this;
    }
    /**
     * Get Vendoracctnumber value
     * @return string|null
     */
    public function getVendoracctnumber(): ?string
    {
        return $this->Vendoracctnumber;
    }
    /**
     * Set Vendoracctnumber value
     * @param string $vendoracctnumber
     * @return \StructType\Transaction
     */
    public function setVendoracctnumber(?string $vendoracctnumber = null): self
    {
        // validation for constraint: string
        if (!is_null($vendoracctnumber) && !is_string($vendoracctnumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendoracctnumber, true), gettype($vendoracctnumber)), __LINE__);
        }
        $this->Vendoracctnumber = $vendoracctnumber;
        
        return $this;
    }
    /**
     * Get Vendorbankcode value
     * @return string|null
     */
    public function getVendorbankcode(): ?string
    {
        return $this->Vendorbankcode;
    }
    /**
     * Set Vendorbankcode value
     * @param string $vendorbankcode
     * @return \StructType\Transaction
     */
    public function setVendorbankcode(?string $vendorbankcode = null): self
    {
        // validation for constraint: string
        if (!is_null($vendorbankcode) && !is_string($vendorbankcode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($vendorbankcode, true), gettype($vendorbankcode)), __LINE__);
        }
        $this->Vendorbankcode = $vendorbankcode;
        
        return $this;
    }
    /**
     * Get Hash value
     * @return string|null
     */
    public function getHash(): ?string
    {
        return $this->Hash;
    }
    /**
     * Set Hash value
     * @param string $hash
     * @return \StructType\Transaction
     */
    public function setHash(?string $hash = null): self
    {
        // validation for constraint: string
        if (!is_null($hash) && !is_string($hash)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hash, true), gettype($hash)), __LINE__);
        }
        $this->Hash = $hash;
        
        return $this;
    }
}
