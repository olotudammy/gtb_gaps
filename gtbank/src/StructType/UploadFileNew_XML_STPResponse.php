<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadFileNew_XML_STPResponse StructType
 * @subpackage Structs
 */
class UploadFileNew_XML_STPResponse extends AbstractStructBase
{
    /**
     * The UploadFileNew_XML_STPResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UploadFileNew_XML_STPResult = null;
    /**
     * Constructor method for UploadFileNew_XML_STPResponse
     * @uses UploadFileNew_XML_STPResponse::setUploadFileNew_XML_STPResult()
     * @param string $uploadFileNew_XML_STPResult
     */
    public function __construct(?string $uploadFileNew_XML_STPResult = null)
    {
        $this
            ->setUploadFileNew_XML_STPResult($uploadFileNew_XML_STPResult);
    }
    /**
     * Get UploadFileNew_XML_STPResult value
     * @return string|null
     */
    public function getUploadFileNew_XML_STPResult(): ?string
    {
        return $this->UploadFileNew_XML_STPResult;
    }
    /**
     * Set UploadFileNew_XML_STPResult value
     * @param string $uploadFileNew_XML_STPResult
     * @return \StructType\UploadFileNew_XML_STPResponse
     */
    public function setUploadFileNew_XML_STPResult(?string $uploadFileNew_XML_STPResult = null): self
    {
        // validation for constraint: string
        if (!is_null($uploadFileNew_XML_STPResult) && !is_string($uploadFileNew_XML_STPResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uploadFileNew_XML_STPResult, true), gettype($uploadFileNew_XML_STPResult)), __LINE__);
        }
        $this->UploadFileNew_XML_STPResult = $uploadFileNew_XML_STPResult;
        
        return $this;
    }
}
