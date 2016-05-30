<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.

$prodInfo = "Product info: " . json_encode((new Modules_ProductInfo_Product())->getInfo());
if (pm_ProductInfo::getVirtualization() === pm_ProductInfo::VIRT_VZ) {
    $logMode = "This extension works with less functionality inside Virtuozzo containers. " . $prodInfo;
} else {
    $logMode = "Extension works in full mode. " . $prodInfo;
}
pm_Log::info($logMode);
