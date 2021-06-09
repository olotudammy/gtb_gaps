<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadFileGTBankDirectDebitResponse StructType
 * @subpackage Structs
 */
class UploadFileGTBankDirectDebitResponse extends AbstractStructBase
{
    /**
     * The UploadFileGTBankDirectDebitResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UploadFileGTBankDirectDebitResult = null;
    /**
     * Constructor method for UploadFileGTBankDirectDebitResponse
     * @uses UploadFileGTBankDirectDebitResponse::setUploadFileGTBankDirectDebitResult()
     * @param string $uploadFileGTBankDirectDebitResult
     */
    public function __construct(?string $uploadFileGTBankDirectDebitResult = null)
    {
        $this
            ->setUploadFileGTBankDirectDebitResult($uploadFileGTBankDirectDebitResult);
    }
    /**
     * Get UploadFileGTBankDirectDebitResult value
     * @return string|null
     */
    public function getUploadFileGTBankDirectDebitResult(): ?string
    {
        return $this->UploadFileGTBankDirectDebitResult;
    }
    /**
     * Set UploadFileGTBankDirectDebitResult value
     * @param string $uploadFileGTBankDirectDebitResult
     * @return \StructType\UploadFileGTBankDirectDebitResponse
     */
    public function setUploadFileGTBankDirectDebitResult(?string $uploadFileGTBankDirectDebitResult = null): self
    {
        // validation for constraint: string
        if (!is_null($uploadFileGTBankDirectDebitResult) && !is_string($uploadFileGTBankDirectDebitResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uploadFileGTBankDirectDebitResult, true), gettype($uploadFileGTBankDirectDebitResult)), __LINE__);
        }
        $this->UploadFileGTBankDirectDebitResult = $uploadFileGTBankDirectDebitResult;
        
        return $this;
    }
}
