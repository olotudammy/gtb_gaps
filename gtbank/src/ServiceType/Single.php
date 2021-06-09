<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Single ServiceType
 * @subpackage Services
 */
class Single extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named SingleTransfers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\SingleTransfers $parameters
     * @return \StructType\SingleTransfersResponse|bool
     */
    public function SingleTransfers(\StructType\SingleTransfers $parameters)
    {
        try {
            $this->setResult($resultSingleTransfers = $this->getSoapClient()->__soapCall('SingleTransfers', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultSingleTransfers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\SingleTransfersResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
