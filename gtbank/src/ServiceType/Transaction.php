<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Transaction ServiceType
 * @subpackage Services
 */
class Transaction extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named TransactionRequery
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\TransactionRequery $parameters
     * @return \StructType\TransactionRequeryResponse|bool
     */
    public function TransactionRequery(\StructType\TransactionRequery $parameters)
    {
        try {
            $this->setResult($resultTransactionRequery = $this->getSoapClient()->__soapCall('TransactionRequery', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultTransactionRequery;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\TransactionRequeryResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
