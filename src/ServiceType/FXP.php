<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for FXP ServiceType
 * @subpackage Services
 */
class FXP extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named FXPayment_XML
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\FXPayment_XML $parameters
     * @return \StructType\FXPayment_XMLResponse|bool
     */
    public function FXPayment_XML(\StructType\FXPayment_XML $parameters)
    {
        try {
            $this->setResult($resultFXPayment_XML = $this->getSoapClient()->__soapCall('FXPayment_XML', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultFXPayment_XML;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\FXPayment_XMLResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
