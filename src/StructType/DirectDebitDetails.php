<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DirectDebitDetails StructType
 * @subpackage Structs
 */
class DirectDebitDetails extends AbstractStructBase
{
    /**
     * The AccessCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AccessCode = null;
    /**
     * The UserName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UserName = null;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Password = null;
    /**
     * The PaymentFlag
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $PaymentFlag = null;
    /**
     * The AccountToDebit
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $AccountToDebit = null;
    /**
     * The Hash
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Hash = null;
    /**
     * The transactions
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \ArrayType\ArrayOfTransaction|null
     */
    protected ?\ArrayType\ArrayOfTransaction $transactions = null;
    /**
     * Constructor method for DirectDebitDetails
     * @uses DirectDebitDetails::setAccessCode()
     * @uses DirectDebitDetails::setUserName()
     * @uses DirectDebitDetails::setPassword()
     * @uses DirectDebitDetails::setPaymentFlag()
     * @uses DirectDebitDetails::setAccountToDebit()
     * @uses DirectDebitDetails::setHash()
     * @uses DirectDebitDetails::setTransactions()
     * @param string $accessCode
     * @param string $userName
     * @param string $password
     * @param string $paymentFlag
     * @param string $accountToDebit
     * @param string $hash
     * @param \ArrayType\ArrayOfTransaction $transactions
     */
    public function __construct(?string $accessCode = null, ?string $userName = null, ?string $password = null, ?string $paymentFlag = null, ?string $accountToDebit = null, ?string $hash = null, ?\ArrayType\ArrayOfTransaction $transactions = null)
    {
        $this
            ->setAccessCode($accessCode)
            ->setUserName($userName)
            ->setPassword($password)
            ->setPaymentFlag($paymentFlag)
            ->setAccountToDebit($accountToDebit)
            ->setHash($hash)
            ->setTransactions($transactions);
    }
    /**
     * Get AccessCode value
     * @return string|null
     */
    public function getAccessCode(): ?string
    {
        return $this->AccessCode;
    }
    /**
     * Set AccessCode value
     * @param string $accessCode
     * @return \StructType\DirectDebitDetails
     */
    public function setAccessCode(?string $accessCode = null): self
    {
        // validation for constraint: string
        if (!is_null($accessCode) && !is_string($accessCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accessCode, true), gettype($accessCode)), __LINE__);
        }
        $this->AccessCode = $accessCode;
        
        return $this;
    }
    /**
     * Get UserName value
     * @return string|null
     */
    public function getUserName(): ?string
    {
        return $this->UserName;
    }
    /**
     * Set UserName value
     * @param string $userName
     * @return \StructType\DirectDebitDetails
     */
    public function setUserName(?string $userName = null): self
    {
        // validation for constraint: string
        if (!is_null($userName) && !is_string($userName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), gettype($userName)), __LINE__);
        }
        $this->UserName = $userName;
        
        return $this;
    }
    /**
     * Get Password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->Password;
    }
    /**
     * Set Password value
     * @param string $password
     * @return \StructType\DirectDebitDetails
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->Password = $password;
        
        return $this;
    }
    /**
     * Get PaymentFlag value
     * @return string|null
     */
    public function getPaymentFlag(): ?string
    {
        return $this->PaymentFlag;
    }
    /**
     * Set PaymentFlag value
     * @param string $paymentFlag
     * @return \StructType\DirectDebitDetails
     */
    public function setPaymentFlag(?string $paymentFlag = null): self
    {
        // validation for constraint: string
        if (!is_null($paymentFlag) && !is_string($paymentFlag)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($paymentFlag, true), gettype($paymentFlag)), __LINE__);
        }
        $this->PaymentFlag = $paymentFlag;
        
        return $this;
    }
    /**
     * Get AccountToDebit value
     * @return string|null
     */
    public function getAccountToDebit(): ?string
    {
        return $this->AccountToDebit;
    }
    /**
     * Set AccountToDebit value
     * @param string $accountToDebit
     * @return \StructType\DirectDebitDetails
     */
    public function setAccountToDebit(?string $accountToDebit = null): self
    {
        // validation for constraint: string
        if (!is_null($accountToDebit) && !is_string($accountToDebit)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountToDebit, true), gettype($accountToDebit)), __LINE__);
        }
        $this->AccountToDebit = $accountToDebit;
        
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
     * @return \StructType\DirectDebitDetails
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
    /**
     * Get transactions value
     * @return \ArrayType\ArrayOfTransaction|null
     */
    public function getTransactions(): ?\ArrayType\ArrayOfTransaction
    {
        return $this->transactions;
    }
    /**
     * Set transactions value
     * @param \ArrayType\ArrayOfTransaction $transactions
     * @return \StructType\DirectDebitDetails
     */
    public function setTransactions(?\ArrayType\ArrayOfTransaction $transactions = null): self
    {
        $this->transactions = $transactions;
        
        return $this;
    }
}
