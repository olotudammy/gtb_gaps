<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ValidateTokenResponse StructType
 * @subpackage Structs
 */
class ValidateTokenResponse extends AbstractStructBase
{
    /**
     * The ValidateTokenResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ValidateTokenResult = null;
    /**
     * Constructor method for ValidateTokenResponse
     * @uses ValidateTokenResponse::setValidateTokenResult()
     * @param string $validateTokenResult
     */
    public function __construct(?string $validateTokenResult = null)
    {
        $this
            ->setValidateTokenResult($validateTokenResult);
    }
    /**
     * Get ValidateTokenResult value
     * @return string|null
     */
    public function getValidateTokenResult(): ?string
    {
        return $this->ValidateTokenResult;
    }
    /**
     * Set ValidateTokenResult value
     * @param string $validateTokenResult
     * @return \StructType\ValidateTokenResponse
     */
    public function setValidateTokenResult(?string $validateTokenResult = null): self
    {
        // validation for constraint: string
        if (!is_null($validateTokenResult) && !is_string($validateTokenResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($validateTokenResult, true), gettype($validateTokenResult)), __LINE__);
        }
        $this->ValidateTokenResult = $validateTokenResult;
        
        return $this;
    }
}
