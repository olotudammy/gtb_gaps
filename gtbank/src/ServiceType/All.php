<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for All ServiceType
 * @subpackage Services
 */
class All extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named AllAccountBalancesRetrieval
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\AllAccountBalancesRetrieval $parameters
     * @return \StructType\AllAccountBalancesRetrievalResponse|bool
     */
    public function AllAccountBalancesRetrieval(\StructType\AllAccountBalancesRetrieval $parameters)
    {
        try {
            $this->setResult($resultAllAccountBalancesRetrieval = $this->getSoapClient()->__soapCall('AllAccountBalancesRetrieval', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultAllAccountBalancesRetrieval;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\AllAccountBalancesRetrievalResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
