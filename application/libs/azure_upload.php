<?php

require_once ROOT . 'vendor/autoload.php';

use WindowsAzure\Common\ServicesBuilder;
use MicrosoftAzure\Storage\Common\ServiceException;

function upload_to_azure($file, $name)
{
    $connectionString = 'DefaultEndpointsProtocol=https;AccountName=' . AZURE_ACCOUNT_NAME . ' ;AccountKey=' . AZURE_ACCOUNT_KEY . ';';
    $blobRestProxy = ServicesBuilder::getInstance()->createBlobService($connectionString);

    $content = fopen($file["tmp_name"], "r");
    try {
        $blobRestProxy->createBlockBlob(AZURE_CONTAINER, $name, $content);
        return "https://"  . AZURE_ACCOUNT_NAME . ".blob.core.windows.net/". AZURE_CONTAINER . "/" . $name;
    } catch (ServiceException $e) {
        // Handle exception based on error codes and messages.
        // Error codes and messages are here:
        // http://msdn.microsoft.com/library/azure/dd179439.aspx
        $code = $e->getCode();
        $error_message = $e->getMessage();
        echo $code.": ".$error_message."<br />";
        return false;
    }
}

?>
