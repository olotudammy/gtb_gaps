<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadFileResponse StructType
 * @subpackage Structs
 */
class UploadFileResponse extends AbstractStructBase
{
    /**
     * The UploadFileResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UploadFileResult = null;
    /**
     * Constructor method for UploadFileResponse
     * @uses UploadFileResponse::setUploadFileResult()
     * @param string $uploadFileResult
     */
    public function __construct(?string $uploadFileResult = null)
    {
        $this
            ->setUploadFileResult($uploadFileResult);
    }
    /**
     * Get UploadFileResult value
     * @return string|null
     */
    public function getUploadFileResult(): ?string
    {
        return $this->UploadFileResult;
    }
    /**
     * Set UploadFileResult value
     * @param string $uploadFileResult
     * @return \StructType\UploadFileResponse
     */
    public function setUploadFileResult(?string $uploadFileResult = null): self
    {
        // validation for constraint: string
        if (!is_null($uploadFileResult) && !is_string($uploadFileResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uploadFileResult, true), gettype($uploadFileResult)), __LINE__);
        }
        $this->UploadFileResult = $uploadFileResult;
        
        return $this;
    }
}
