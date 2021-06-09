<?php
/**
 * This file aims to show you how to use this generated package.
 * In addition, the goal is to show which methods are available and the first needed parameter(s)
 * You have to use an associative array such as:
 * - the key must be a constant beginning with WSDL_ from AbstractSoapClientBase class (each generated ServiceType class extends this class)
 * - the value must be the corresponding key value (each option matches a {@link http://www.php.net/manual/en/soapclient.soapclient.php} option)
 * $options = [
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ebank2.gtbank.com/Gaps_FileUploader/FileUploader.asmx?wsdl',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_TRACE => true,
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_LOGIN => 'you_secret_login',
 * WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_PASSWORD => 'you_secret_password',
 * ];
 * etc...
 */
require_once __DIR__ . '/vendor/autoload.php';
/**
 * Minimal options
 */
$options = [
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_URL => 'https://ebank2.gtbank.com/Gaps_FileUploader/FileUploader.asmx?wsdl',
    WsdlToPhp\PackageBase\AbstractSoapClientBase::WSDL_CLASSMAP => ClassMap::get(),
];
/**
 * Samples for Upload ServiceType
 */
$upload = new \ServiceType\Upload($options);
/**
 * Sample call for UploadFile operation/method
 */
if ($upload->UploadFile(new \StructType\UploadFile()) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Sample call for UploadFile_XML operation/method
 */
if ($upload->UploadFile_XML(new \StructType\UploadFile_XML()) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Sample call for UploadFile_MT101 operation/method
 */
if ($upload->UploadFile_MT101(new \StructType\UploadFile_MT101()) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Sample call for UploadFile_FX_MT101 operation/method
 */
if ($upload->UploadFile_FX_MT101(new \StructType\UploadFile_FX_MT101()) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Sample call for UploadFile_IDoc operation/method
 */
if ($upload->UploadFile_IDoc(new \StructType\UploadFile_IDoc()) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Sample call for UploadFile_FX_IDoc operation/method
 */
if ($upload->UploadFile_FX_IDoc(new \StructType\UploadFile_FX_IDoc()) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Sample call for UploadFileToken_XML operation/method
 */
if ($upload->UploadFileToken_XML(new \StructType\UploadFileToken_XML()) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Sample call for UploadFileNew_XML operation/method
 */
if ($upload->UploadFileNew_XML(new \StructType\UploadFileNew_XML()) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Sample call for UploadFileNew_XML_STP operation/method
 */
if ($upload->UploadFileNew_XML_STP(new \StructType\UploadFileNew_XML_STP()) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Sample call for UploadFileGTBankDirectDebit operation/method
 */
if ($upload->UploadFileGTBankDirectDebit(new \StructType\UploadFileGTBankDirectDebit()) !== false) {
    print_r($upload->getResult());
} else {
    print_r($upload->getLastError());
}
/**
 * Samples for Transaction ServiceType
 */
$transaction = new \ServiceType\Transaction($options);
/**
 * Sample call for TransactionRequery operation/method
 */
if ($transaction->TransactionRequery(new \StructType\TransactionRequery()) !== false) {
    print_r($transaction->getResult());
} else {
    print_r($transaction->getLastError());
}
/**
 * Samples for Account ServiceType
 */
$account = new \ServiceType\Account($options);
/**
 * Sample call for AccountStatement_XML operation/method
 */
if ($account->AccountStatement_XML(new \StructType\AccountStatement_XML()) !== false) {
    print_r($account->getResult());
} else {
    print_r($account->getLastError());
}
/**
 * Sample call for AccountBalanceRetrieval operation/method
 */
if ($account->AccountBalanceRetrieval(new \StructType\AccountBalanceRetrieval()) !== false) {
    print_r($account->getResult());
} else {
    print_r($account->getLastError());
}
/**
 * Samples for FXP ServiceType
 */
$fXP = new \ServiceType\FXP($options);
/**
 * Sample call for FXPayment_XML operation/method
 */
if ($fXP->FXPayment_XML(new \StructType\FXPayment_XML()) !== false) {
    print_r($fXP->getResult());
} else {
    print_r($fXP->getLastError());
}
/**
 * Samples for All ServiceType
 */
$all = new \ServiceType\All($options);
/**
 * Sample call for AllAccountBalancesRetrieval operation/method
 */
if ($all->AllAccountBalancesRetrieval(new \StructType\AllAccountBalancesRetrieval()) !== false) {
    print_r($all->getResult());
} else {
    print_r($all->getLastError());
}
/**
 * Samples for Validate ServiceType
 */
$validate = new \ServiceType\Validate($options);
/**
 * Sample call for ValidateToken operation/method
 */
if ($validate->ValidateToken(new \StructType\ValidateToken()) !== false) {
    print_r($validate->getResult());
} else {
    print_r($validate->getLastError());
}
/**
 * Samples for Bulk ServiceType
 */
$bulk = new \ServiceType\Bulk($options);
/**
 * Sample call for BulkTransfers operation/method
 */
if ($bulk->BulkTransfers(new \StructType\BulkTransfers()) !== false) {
    print_r($bulk->getResult());
} else {
    print_r($bulk->getLastError());
}
/**
 * Samples for Single ServiceType
 */
$single = new \ServiceType\Single($options);
/**
 * Sample call for SingleTransfers operation/method
 */
if ($single->SingleTransfers(new \StructType\SingleTransfers()) !== false) {
    print_r($single->getResult());
} else {
    print_r($single->getLastError());
}
/**
 * Samples for Get ServiceType
 */
$get = new \ServiceType\Get($options);
/**
 * Sample call for GetAccountInGTB operation/method
 */
if ($get->GetAccountInGTB(new \StructType\GetAccountInGTB()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetAccountInOtherBank operation/method
 */
if ($get->GetAccountInOtherBank(new \StructType\GetAccountInOtherBank()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
/**
 * Sample call for GetNIPBank operation/method
 */
if ($get->GetNIPBank(new \StructType\GetNIPBank()) !== false) {
    print_r($get->getResult());
} else {
    print_r($get->getLastError());
}
