<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadFile_MT101 StructType
 * @subpackage Structs
 */
class UploadFile_MT101 extends AbstractStructBase
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
     * The fileType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $fileType = null;
    /**
     * The customerid
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $customerid = null;
    /**
     * Constructor method for UploadFile_MT101
     * @uses UploadFile_MT101::setUploadFile()
     * @uses UploadFile_MT101::setFileName()
     * @uses UploadFile_MT101::setFileType()
     * @uses UploadFile_MT101::setCustomerid()
     * @param string $uploadFile
     * @param string $fileName
     * @param string $fileType
     * @param string $customerid
     */
    public function __construct(?string $uploadFile = null, ?string $fileName = null, ?string $fileType = null, ?string $customerid = null)
    {
        $this
            ->setUploadFile($uploadFile)
            ->setFileName($fileName)
            ->setFileType($fileType)
            ->setCustomerid($customerid);
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
     * @return \StructType\UploadFile_MT101
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
     * @return \StructType\UploadFile_MT101
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
     * Get fileType value
     * @return string|null
     */
    public function getFileType(): ?string
    {
        return $this->fileType;
    }
    /**
     * Set fileType value
     * @param string $fileType
     * @return \StructType\UploadFile_MT101
     */
    public function setFileType(?string $fileType = null): self
    {
        // validation for constraint: string
        if (!is_null($fileType) && !is_string($fileType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fileType, true), gettype($fileType)), __LINE__);
        }
        $this->fileType = $fileType;
        
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
     * @return \StructType\UploadFile_MT101
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
}
