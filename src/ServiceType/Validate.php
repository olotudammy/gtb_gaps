<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Validate ServiceType
 * @subpackage Services
 */
class Validate extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named ValidateToken
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\ValidateToken $parameters
     * @return \StructType\ValidateTokenResponse|bool
     */
    public function ValidateToken(\StructType\ValidateToken $parameters)
    {
        try {
            $this->setResult($resultValidateToken = $this->getSoapClient()->__soapCall('ValidateToken', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultValidateToken;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\ValidateTokenResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
