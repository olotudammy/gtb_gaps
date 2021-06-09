<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadFile StructType
 * @subpackage Structs
 */
class UploadFile extends AbstractStructBase
{
    /**
     * The uploadFile
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $uploadFile = null;
    /**
     * The fileName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fileName = null;
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
     * Constructor method for UploadFile
     * @uses UploadFile::setUploadFile()
     * @uses UploadFile::setFileName()
     * @uses UploadFile::setCustomerid()
     * @uses UploadFile::setUsername()
     * @uses UploadFile::setPassword()
     * @param string $uploadFile
     * @param string $fileName
     * @param string $customerid
     * @param string $username
     * @param string $password
     */
    public function __construct(?string $uploadFile = null, ?string $fileName = null, ?string $customerid = null, ?string $username = null, ?string $password = null)
    {
        $this
            ->setUploadFile($uploadFile)
            ->setFileName($fileName)
            ->setCustomerid($customerid)
            ->setUsername($username)
            ->setPassword($password);
    }
    /**
     * Get uploadFile value
     * @return string|null
     */
    public function getUploadFile(): ?string
    {
        return $this->uploadFile;
    }
    /**
     * Set uploadFile value
     * @param string $uploadFile
     * @return \StructType\UploadFile
     */
    public function setUploadFile(?string $uploadFile = null): self
    {
        // validation for constraint: string
        if (!is_null($uploadFile) && !is_string($uploadFile)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uploadFile, true), gettype($uploadFile)), __LINE__);
        }
        $this->uploadFile = $uploadFile;
        
        return $this;
    }
    /**
     * Get fileName value
     * @return string|null
     */
    public function getFileName(): ?string
    {
        return $this->fileName;
    }
    /**
     * Set fileName value
     * @param string $fileName
     * @return \StructType\UploadFile
     */
    public function setFileName(?string $fileName = null): self
    {
        // validation for constraint: string
        if (!is_null($fileName) && !is_string($fileName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileName, true), gettype($fileName)), __LINE__);
        }
        $this->fileName = $fileName;
        
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
     * @return \StructType\UploadFile
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
     * @return \StructType\UploadFile
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
     * @return \StructType\UploadFile
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
