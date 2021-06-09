<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadFile_XML StructType
 * @subpackage Structs
 */
class UploadFile_XML extends AbstractStructBase
{
    /**
     * The xmlstring
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $xmlstring = null;
    /**
     * The customerid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerid = null;
    /**
     * The username
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $username = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * Constructor method for UploadFile_XML
     * @uses UploadFile_XML::setXmlstring()
     * @uses UploadFile_XML::setCustomerid()
     * @uses UploadFile_XML::setUsername()
     * @uses UploadFile_XML::setPassword()
     * @param string $xmlstring
     * @param string $customerid
     * @param string $username
     * @param string $password
     */
    public function __construct(?string $xmlstring = null, ?string $customerid = null, ?string $username = null, ?string $password = null)
    {
        $this
            ->setXmlstring($xmlstring)
            ->setCustomerid($customerid)
            ->setUsername($username)
            ->setPassword($password);
    }
    /**
     * Get xmlstring value
     * @return string|null
     */
    public function getXmlstring(): ?string
    {
        return $this->xmlstring;
    }
    /**
     * Set xmlstring value
     * @param string $xmlstring
     * @return \StructType\UploadFile_XML
     */
    public function setXmlstring(?string $xmlstring = null): self
    {
        // validation for constraint: string
        if (!is_null($xmlstring) && !is_string($xmlstring)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($xmlstring, true), gettype($xmlstring)), __LINE__);
        }
        $this->xmlstring = $xmlstring;
        
        return $this;
    }
    /**
     * Get customerid value
     * @return string|null
     */
    public function getCustomerid(): ?string
    {
        return $this->customerid;
    }
    /**
     * Set customerid value
     * @param string $customerid
     * @return \StructType\UploadFile_XML
     */
    public function setCustomerid(?string $customerid = null): self
    {
        // validation for constraint: string
        if (!is_null($customerid) && !is_string($customerid)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerid, true), gettype($customerid)), __LINE__);
        }
        $this->customerid = $customerid;
        
        return $this;
    }
    /**
     * Get username value
     * @return string|null
     */
    public function getUsername(): ?string
    {
        return $this->username;
    }
    /**
     * Set username value
     * @param string $username
     * @return \StructType\UploadFile_XML
     */
    public function setUsername(?string $username = null): self
    {
        // validation for constraint: string
        if (!is_null($username) && !is_string($username)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($username, true), gettype($username)), __LINE__);
        }
        $this->username = $username;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \StructType\UploadFile_XML
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
}
