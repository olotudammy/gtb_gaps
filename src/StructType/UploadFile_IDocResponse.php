<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadFile_IDocResponse StructType
 * @subpackage Structs
 */
class UploadFile_IDocResponse extends AbstractStructBase
{
    /**
     * The UploadFile_IDocResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UploadFile_IDocResult = null;
    /**
     * Constructor method for UploadFile_IDocResponse
     * @uses UploadFile_IDocResponse::setUploadFile_IDocResult()
     * @param string $uploadFile_IDocResult
     */
    public function __construct(?string $uploadFile_IDocResult = null)
    {
        $this
            ->setUploadFile_IDocResult($uploadFile_IDocResult);
    }
    /**
     * Get UploadFile_IDocResult value
     * @return string|null
     */
    public function getUploadFile_IDocResult(): ?string
    {
        return $this->UploadFile_IDocResult;
    }
    /**
     * Set UploadFile_IDocResult value
     * @param string $uploadFile_IDocResult
     * @return \StructType\UploadFile_IDocResponse
     */
    public function setUploadFile_IDocResult(?string $uploadFile_IDocResult = null): self
    {
        // validation for constraint: string
        if (!is_null($uploadFile_IDocResult) && !is_string($uploadFile_IDocResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uploadFile_IDocResult, true), gettype($uploadFile_IDocResult)), __LINE__);
        }
        $this->UploadFile_IDocResult = $uploadFile_IDocResult;
        
        return $this;
    }
}
