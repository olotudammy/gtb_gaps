<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FXPayment_XMLResponse StructType
 * @subpackage Structs
 */
class FXPayment_XMLResponse extends AbstractStructBase
{
    /**
     * The FXPayment_XMLResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $FXPayment_XMLResult = null;
    /**
     * Constructor method for FXPayment_XMLResponse
     * @uses FXPayment_XMLResponse::setFXPayment_XMLResult()
     * @param string $fXPayment_XMLResult
     */
    public function __construct(?string $fXPayment_XMLResult = null)
    {
        $this
            ->setFXPayment_XMLResult($fXPayment_XMLResult);
    }
    /**
     * Get FXPayment_XMLResult value
     * @return string|null
     */
    public function getFXPayment_XMLResult(): ?string
    {
        return $this->FXPayment_XMLResult;
    }
    /**
     * Set FXPayment_XMLResult value
     * @param string $fXPayment_XMLResult
     * @return \StructType\FXPayment_XMLResponse
     */
    public function setFXPayment_XMLResult(?string $fXPayment_XMLResult = null): self
    {
        // validation for constraint: string
        if (!is_null($fXPayment_XMLResult) && !is_string($fXPayment_XMLResult)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fXPayment_XMLResult, true), gettype($fXPayment_XMLResult)), __LINE__);
        }
        $this->FXPayment_XMLResult = $fXPayment_XMLResult;
        
        return $this;
    }
}
