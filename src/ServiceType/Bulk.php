<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Bulk ServiceType
 * @subpackage Services
 */
class Bulk extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named BulkTransfers
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\BulkTransfers $parameters
     * @return \StructType\BulkTransfersResponse|bool
     */
    public function BulkTransfers(\StructType\BulkTransfers $parameters)
    {
        try {
            $this->setResult($resultBulkTransfers = $this->getSoapClient()->__soapCall('BulkTransfers', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultBulkTransfers;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\BulkTransfersResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
