<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadFile_XMLResponse StructType
 * @subpackage Structs
 */
class UploadFile_XMLResponse extends AbstractStructBase
{
    /**
     * The UploadFile_XMLResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UploadFile_XMLResult = null;
    /**
     * Constructor method for UploadFile_XMLResponse
     * @uses UploadFile_XMLResponse::setUploadFile_XMLResult()
     * @param string $uploadFile_XMLResult
     */
    public function __construct(?string $uploadFile_XMLResult = null)
    {
        $this
            ->setUploadFile_XMLResult($uploadFile_XMLResult);
    }
    /**
     * Get UploadFile_XMLResult value
     * @return string|null
     */
    public function getUploadFile_XMLResult(): ?string
    {
        return $this->UploadFile_XMLResult;
    }
    /**
     * Set UploadFile_XMLResult value
     * @param string $uploadFile_XMLResult
     * @return \StructType\UploadFile_XMLResponse
     */
    public function setUploadFile_XMLResult(?string $uploadFile_XMLResult = null): self
    {
        // validation for constraint: string
        if (!is_null($uploadFile_XMLResult) && !is_string($uploadFile_XMLResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uploadFile_XMLResult, true), gettype($uploadFile_XMLResult)), __LINE__);
        }
        $this->UploadFile_XMLResult = $uploadFile_XMLResult;
        
        return $this;
    }
}
