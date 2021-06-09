<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadFile_FX_IDocResponse StructType
 * @subpackage Structs
 */
class UploadFile_FX_IDocResponse extends AbstractStructBase
{
    /**
     * The UploadFile_FX_IDocResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UploadFile_FX_IDocResult = null;
    /**
     * Constructor method for UploadFile_FX_IDocResponse
     * @uses UploadFile_FX_IDocResponse::setUploadFile_FX_IDocResult()
     * @param string $uploadFile_FX_IDocResult
     */
    public function __construct(?string $uploadFile_FX_IDocResult = null)
    {
        $this
            ->setUploadFile_FX_IDocResult($uploadFile_FX_IDocResult);
    }
    /**
     * Get UploadFile_FX_IDocResult value
     * @return string|null
     */
    public function getUploadFile_FX_IDocResult(): ?string
    {
        return $this->UploadFile_FX_IDocResult;
    }
    /**
     * Set UploadFile_FX_IDocResult value
     * @param string $uploadFile_FX_IDocResult
     * @return \StructType\UploadFile_FX_IDocResponse
     */
    public function setUploadFile_FX_IDocResult(?string $uploadFile_FX_IDocResult = null): self
    {
        // validation for constraint: string
        if (!is_null($uploadFile_FX_IDocResult) && !is_string($uploadFile_FX_IDocResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uploadFile_FX_IDocResult, true), gettype($uploadFile_FX_IDocResult)), __LINE__);
        }
        $this->UploadFile_FX_IDocResult = $uploadFile_FX_IDocResult;
        
        return $this;
    }
}
