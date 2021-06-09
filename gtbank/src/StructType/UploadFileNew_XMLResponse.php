<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadFileNew_XMLResponse StructType
 * @subpackage Structs
 */
class UploadFileNew_XMLResponse extends AbstractStructBase
{
    /**
     * The UploadFileNew_XMLResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UploadFileNew_XMLResult = null;
    /**
     * Constructor method for UploadFileNew_XMLResponse
     * @uses UploadFileNew_XMLResponse::setUploadFileNew_XMLResult()
     * @param string $uploadFileNew_XMLResult
     */
    public function __construct(?string $uploadFileNew_XMLResult = null)
    {
        $this
            ->setUploadFileNew_XMLResult($uploadFileNew_XMLResult);
    }
    /**
     * Get UploadFileNew_XMLResult value
     * @return string|null
     */
    public function getUploadFileNew_XMLResult(): ?string
    {
        return $this->UploadFileNew_XMLResult;
    }
    /**
     * Set UploadFileNew_XMLResult value
     * @param string $uploadFileNew_XMLResult
     * @return \StructType\UploadFileNew_XMLResponse
     */
    public function setUploadFileNew_XMLResult(?string $uploadFileNew_XMLResult = null): self
    {
        // validation for constraint: string
        if (!is_null($uploadFileNew_XMLResult) && !is_string($uploadFileNew_XMLResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uploadFileNew_XMLResult, true), gettype($uploadFileNew_XMLResult)), __LINE__);
        }
        $this->UploadFileNew_XMLResult = $uploadFileNew_XMLResult;
        
        return $this;
    }
}
