<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.
$logFilePath = pm_ProductInfo::getPlatform() === pm_ProductInfo::PLATFORM_WINDOWS ?
    'C:\\Program Files (x86)\\Plesk\\tmp\\' : '/usr/local/psa/tmp/';

$data = (new Modules_ProductInfo_Product())->getInfo();
if (pm_ProductInfo::getVirtualization() === pm_ProductInfo::VIRT_VZ) {
    $logMode = "This extension works with less functionality inside Virtuozzo containers\n" . $data;
} else {
    $logMode = "Extension works in full mode.\n" . $data;
}

file_put_contents($logFilePath . 'ext-product-info_installation.log', $logMode);
