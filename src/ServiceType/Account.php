<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Account ServiceType
 * @subpackage Services
 */
class Account extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AccountStatement_XML
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AccountStatement_XML $parameters
     * @return \StructType\AccountStatement_XMLResponse|bool
     */
    public function AccountStatement_XML(\StructType\AccountStatement_XML $parameters)
    {
        try {
            $this->setResult($resultAccountStatement_XML = $this->getSoapClient()->__soapCall('AccountStatement_XML', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAccountStatement_XML;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named AccountBalanceRetrieval
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AccountBalanceRetrieval $parameters
     * @return \StructType\AccountBalanceRetrievalResponse|bool
     */
    public function AccountBalanceRetrieval(\StructType\AccountBalanceRetrieval $parameters)
    {
        try {
            $this->setResult($resultAccountBalanceRetrieval = $this->getSoapClient()->__soapCall('AccountBalanceRetrieval', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAccountBalanceRetrieval;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\AccountBalanceRetrievalResponse|\StructType\AccountStatement_XMLResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
