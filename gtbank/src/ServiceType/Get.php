<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Get ServiceType
 * @subpackage Services
 */
class Get extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named GetAccountInGTB
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAccountInGTB $parameters
     * @return \StructType\GetAccountInGTBResponse|bool
     */
    public function GetAccountInGTB(\StructType\GetAccountInGTB $parameters)
    {
        try {
            $this->setResult($resultGetAccountInGTB = $this->getSoapClient()->__soapCall('GetAccountInGTB', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccountInGTB;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetAccountInOtherBank
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetAccountInOtherBank $parameters
     * @return \StructType\GetAccountInOtherBankResponse|bool
     */
    public function GetAccountInOtherBank(\StructType\GetAccountInOtherBank $parameters)
    {
        try {
            $this->setResult($resultGetAccountInOtherBank = $this->getSoapClient()->__soapCall('GetAccountInOtherBank', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetAccountInOtherBank;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named GetNIPBank
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\GetNIPBank $parameters
     * @return \StructType\GetNIPBankResponse|bool
     */
    public function GetNIPBank(\StructType\GetNIPBank $parameters)
    {
        try {
            $this->setResult($resultGetNIPBank = $this->getSoapClient()->__soapCall('GetNIPBank', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultGetNIPBank;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\GetAccountInGTBResponse|\StructType\GetAccountInOtherBankResponse|\StructType\GetNIPBankResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
