<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadFileToken_XMLResponse StructType
 * @subpackage Structs
 */
class UploadFileToken_XMLResponse extends AbstractStructBase
{
    /**
     * The UploadFileToken_XMLResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UploadFileToken_XMLResult = null;
    /**
     * Constructor method for UploadFileToken_XMLResponse
     * @uses UploadFileToken_XMLResponse::setUploadFileToken_XMLResult()
     * @param string $uploadFileToken_XMLResult
     */
    public function __construct(?string $uploadFileToken_XMLResult = null)
    {
        $this
            ->setUploadFileToken_XMLResult($uploadFileToken_XMLResult);
    }
    /**
     * Get UploadFileToken_XMLResult value
     * @return string|null
     */
    public function getUploadFileToken_XMLResult(): ?string
    {
        return $this->UploadFileToken_XMLResult;
    }
    /**
     * Set UploadFileToken_XMLResult value
     * @param string $uploadFileToken_XMLResult
     * @return \StructType\UploadFileToken_XMLResponse
     */
    public function setUploadFileToken_XMLResult(?string $uploadFileToken_XMLResult = null): self
    {
        // validation for constraint: string
        if (!is_null($uploadFileToken_XMLResult) && !is_string($uploadFileToken_XMLResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uploadFileToken_XMLResult, true), gettype($uploadFileToken_XMLResult)), __LINE__);
        }
        $this->UploadFileToken_XMLResult = $uploadFileToken_XMLResult;
        
        return $this;
    }
}
