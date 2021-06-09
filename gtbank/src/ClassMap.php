<?php

declare(strict_types=1);
/**
 * Class which returns the class map definition
 */
class ClassMap
{
    /**
     * Returns the mapping between the WSDL Structs and generated Structs' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function get(): array
    {
        return [
            'UploadFile' => '\\StructType\\UploadFile',
            'UploadFileResponse' => '\\StructType\\UploadFileResponse',
            'UploadFile_XML' => '\\StructType\\UploadFile_XML',
            'UploadFile_XMLResponse' => '\\StructType\\UploadFile_XMLResponse',
            'UploadFile_MT101' => '\\StructType\\UploadFile_MT101',
            'UploadFile_MT101Response' => '\\StructType\\UploadFile_MT101Response',
            'UploadFile_FX_MT101' => '\\StructType\\UploadFile_FX_MT101',
            'UploadFile_FX_MT101Response' => '\\StructType\\UploadFile_FX_MT101Response',
            'UploadFile_IDoc' => '\\StructType\\UploadFile_IDoc',
            'UploadFile_IDocResponse' => '\\StructType\\UploadFile_IDocResponse',
            'UploadFile_FX_IDoc' => '\\StructType\\UploadFile_FX_IDoc',
            'UploadFile_FX_IDocResponse' => '\\StructType\\UploadFile_FX_IDocResponse',
            'TransactionRequery' => '\\StructType\\TransactionRequery',
            'TransactionRequeryResponse' => '\\StructType\\TransactionRequeryResponse',
            'AccountStatement_XML' => '\\StructType\\AccountStatement_XML',
            'AccountStatement_XMLResponse' => '\\StructType\\AccountStatement_XMLResponse',
            'FXPayment_XML' => '\\StructType\\FXPayment_XML',
            'FXPayment_XMLResponse' => '\\StructType\\FXPayment_XMLResponse',
            'AccountBalanceRetrieval' => '\\StructType\\AccountBalanceRetrieval',
            'AccountBalanceRetrievalResponse' => '\\StructType\\AccountBalanceRetrievalResponse',
            'AllAccountBalancesRetrieval' => '\\StructType\\AllAccountBalancesRetrieval',
            'AllAccountBalancesRetrievalResponse' => '\\StructType\\AllAccountBalancesRetrievalResponse',
            'ValidateToken' => '\\StructType\\ValidateToken',
            'ValidateTokenResponse' => '\\StructType\\ValidateTokenResponse',
            'UploadFileToken_XML' => '\\StructType\\UploadFileToken_XML',
            'UploadFileToken_XMLResponse' => '\\StructType\\UploadFileToken_XMLResponse',
            'UploadFileNew_XML' => '\\StructType\\UploadFileNew_XML',
            'UploadFileNew_XMLResponse' => '\\StructType\\UploadFileNew_XMLResponse',
            'UploadFileNew_XML_STP' => '\\StructType\\UploadFileNew_XML_STP',
            'UploadFileNew_XML_STPResponse' => '\\StructType\\UploadFileNew_XML_STPResponse',
            'BulkTransfers' => '\\StructType\\BulkTransfers',
            'BulkTransfersResponse' => '\\StructType\\BulkTransfersResponse',
            'SingleTransfers' => '\\StructType\\SingleTransfers',
            'SingleTransfersResponse' => '\\StructType\\SingleTransfersResponse',
            'GetAccountInGTB' => '\\StructType\\GetAccountInGTB',
            'GetAccountInGTBResponse' => '\\StructType\\GetAccountInGTBResponse',
            'GetAccountInOtherBank' => '\\StructType\\GetAccountInOtherBank',
            'GetAccountInOtherBankResponse' => '\\StructType\\GetAccountInOtherBankResponse',
            'UploadFileGTBankDirectDebit' => '\\StructType\\UploadFileGTBankDirectDebit',
            'DirectDebitDetails' => '\\StructType\\DirectDebitDetails',
            'ArrayOfTransaction' => '\\ArrayType\\ArrayOfTransaction',
            'Transaction' => '\\StructType\\Transaction',
            'UploadFileGTBankDirectDebitResponse' => '\\StructType\\UploadFileGTBankDirectDebitResponse',
            'GetNIPBank' => '\\StructType\\GetNIPBank',
            'GetNIPBankResponse' => '\\StructType\\GetNIPBankResponse',
            'GetNIPBankResult' => '\\StructType\\GetNIPBankResult',
        ];
    }
}
