<?php

declare(strict_types=1);

namespace ServiceType;

use SoapFault;
use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Upload ServiceType
 * @subpackage Services
 */
class Upload extends AbstractSoapClientBase
{
    /**
     * Method to call the operation originally named UploadFile
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UploadFile $parameters
     * @return \StructType\UploadFileResponse|bool
     */
    public function UploadFile(\StructType\UploadFile $parameters)
    {
        try {
            $this->setResult($resultUploadFile = $this->getSoapClient()->__soapCall('UploadFile', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUploadFile;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UploadFile_XML
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UploadFile_XML $parameters
     * @return \StructType\UploadFile_XMLResponse|bool
     */
    public function UploadFile_XML(\StructType\UploadFile_XML $parameters)
    {
        try {
            $this->setResult($resultUploadFile_XML = $this->getSoapClient()->__soapCall('UploadFile_XML', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUploadFile_XML;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UploadFile_MT101
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UploadFile_MT101 $parameters
     * @return \StructType\UploadFile_MT101Response|bool
     */
    public function UploadFile_MT101(\StructType\UploadFile_MT101 $parameters)
    {
        try {
            $this->setResult($resultUploadFile_MT101 = $this->getSoapClient()->__soapCall('UploadFile_MT101', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUploadFile_MT101;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UploadFile_FX_MT101
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UploadFile_FX_MT101 $parameters
     * @return \StructType\UploadFile_FX_MT101Response|bool
     */
    public function UploadFile_FX_MT101(\StructType\UploadFile_FX_MT101 $parameters)
    {
        try {
            $this->setResult($resultUploadFile_FX_MT101 = $this->getSoapClient()->__soapCall('UploadFile_FX_MT101', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUploadFile_FX_MT101;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UploadFile_IDoc
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UploadFile_IDoc $parameters
     * @return \StructType\UploadFile_IDocResponse|bool
     */
    public function UploadFile_IDoc(\StructType\UploadFile_IDoc $parameters)
    {
        try {
            $this->setResult($resultUploadFile_IDoc = $this->getSoapClient()->__soapCall('UploadFile_IDoc', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUploadFile_IDoc;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UploadFile_FX_IDoc
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UploadFile_FX_IDoc $parameters
     * @return \StructType\UploadFile_FX_IDocResponse|bool
     */
    public function UploadFile_FX_IDoc(\StructType\UploadFile_FX_IDoc $parameters)
    {
        try {
            $this->setResult($resultUploadFile_FX_IDoc = $this->getSoapClient()->__soapCall('UploadFile_FX_IDoc', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUploadFile_FX_IDoc;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UploadFileToken_XML
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UploadFileToken_XML $parameters
     * @return \StructType\UploadFileToken_XMLResponse|bool
     */
    public function UploadFileToken_XML(\StructType\UploadFileToken_XML $parameters)
    {
        try {
            $this->setResult($resultUploadFileToken_XML = $this->getSoapClient()->__soapCall('UploadFileToken_XML', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUploadFileToken_XML;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UploadFileNew_XML
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UploadFileNew_XML $parameters
     * @return \StructType\UploadFileNew_XMLResponse|bool
     */
    public function UploadFileNew_XML(\StructType\UploadFileNew_XML $parameters)
    {
        try {
            $this->setResult($resultUploadFileNew_XML = $this->getSoapClient()->__soapCall('UploadFileNew_XML', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUploadFileNew_XML;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UploadFileNew_XML_STP
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UploadFileNew_XML_STP $parameters
     * @return \StructType\UploadFileNew_XML_STPResponse|bool
     */
    public function UploadFileNew_XML_STP(\StructType\UploadFileNew_XML_STP $parameters)
    {
        try {
            $this->setResult($resultUploadFileNew_XML_STP = $this->getSoapClient()->__soapCall('UploadFileNew_XML_STP', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUploadFileNew_XML_STP;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Method to call the operation originally named UploadFileGTBankDirectDebit
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::saveLastError()
     * @param \StructType\UploadFileGTBankDirectDebit $parameters
     * @return \StructType\UploadFileGTBankDirectDebitResponse|bool
     */
    public function UploadFileGTBankDirectDebit(\StructType\UploadFileGTBankDirectDebit $parameters)
    {
        try {
            $this->setResult($resultUploadFileGTBankDirectDebit = $this->getSoapClient()->__soapCall('UploadFileGTBankDirectDebit', [
                $parameters,
            ], [], [], $this->outputHeaders));
        
            return $resultUploadFileGTBankDirectDebit;
        } catch (SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
        
            return false;
        }
    }
    /**
     * Returns the result
     * @see AbstractSoapClientBase::getResult()
     * @return \StructType\UploadFileGTBankDirectDebitResponse|\StructType\UploadFileNew_XMLResponse|\StructType\UploadFileNew_XML_STPResponse|\StructType\UploadFileResponse|\StructType\UploadFileToken_XMLResponse|\StructType\UploadFile_FX_IDocResponse|\StructType\UploadFile_FX_MT101Response|\StructType\UploadFile_IDocResponse|\StructType\UploadFile_MT101Response|\StructType\UploadFile_XMLResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
