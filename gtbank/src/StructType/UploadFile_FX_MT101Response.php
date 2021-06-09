<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadFile_FX_MT101Response StructType
 * @subpackage Structs
 */
class UploadFile_FX_MT101Response extends AbstractStructBase
{
    /**
     * The UploadFile_FX_MT101Result
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $UploadFile_FX_MT101Result = null;
    /**
     * Constructor method for UploadFile_FX_MT101Response
     * @uses UploadFile_FX_MT101Response::setUploadFile_FX_MT101Result()
     * @param string $uploadFile_FX_MT101Result
     */
    public function __construct(?string $uploadFile_FX_MT101Result = null)
    {
        $this
            ->setUploadFile_FX_MT101Result($uploadFile_FX_MT101Result);
    }
    /**
     * Get UploadFile_FX_MT101Result value
     * @return string|null
     */
    public function getUploadFile_FX_MT101Result(): ?string
    {
        return $this->UploadFile_FX_MT101Result;
    }
    /**
     * Set UploadFile_FX_MT101Result value
     * @param string $uploadFile_FX_MT101Result
     * @return \StructType\UploadFile_FX_MT101Response
     */
    public function setUploadFile_FX_MT101Result(?string $uploadFile_FX_MT101Result = null): self
    {
        // validation for constraint: string
        if (!is_null($uploadFile_FX_MT101Result) && !is_string($uploadFile_FX_MT101Result)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($uploadFile_FX_MT101Result, true), gettype($uploadFile_FX_MT101Result)), __LINE__);
        }
        $this->UploadFile_FX_MT101Result = $uploadFile_FX_MT101Result;
        
        return $this;
    }
}
