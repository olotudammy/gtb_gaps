<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UploadFileGTBankDirectDebit StructType
 * @subpackage Structs
 */
class UploadFileGTBankDirectDebit extends AbstractStructBase
{
    /**
     * The xmlString
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * @var \StructType\DirectDebitDetails|null
     */
    protected ?\StructType\DirectDebitDetails $xmlString = null;
    /**
     * Constructor method for UploadFileGTBankDirectDebit
     * @uses UploadFileGTBankDirectDebit::setXmlString()
     * @param \StructType\DirectDebitDetails $xmlString
     */
    public function __construct(?\StructType\DirectDebitDetails $xmlString = null)
    {
        $this
            ->setXmlString($xmlString);
    }
    /**
     * Get xmlString value
     * @return \StructType\DirectDebitDetails|null
     */
    public function getXmlString(): ?\StructType\DirectDebitDetails
    {
        return $this->xmlString;
    }
    /**
     * Set xmlString value
     * @param \StructType\DirectDebitDetails $xmlString
     * @return \StructType\UploadFileGTBankDirectDebit
     */
    public function setXmlString(?\StructType\DirectDebitDetails $xmlString = null): self
    {
        $this->xmlString = $xmlString;
        
        return $this;
    }
}
