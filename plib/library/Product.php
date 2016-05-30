<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.
class Modules_ProductInfo_Product
{
    public function getInfo()
    {
        $productInfo = [
            'platform' => pm_ProductInfo::getPlatform(),
            'version' => pm_ProductInfo::getVersion(),
            'os name' => pm_ProductInfo::getOsName(),
            'os version' => pm_ProductInfo::getOsVersion(),
            'arch' => pm_ProductInfo::getOsArch(),
            'virtualization' => pm_ProductInfo::getVirtualization(),
        ];
        return json_encode($productInfo, JSON_PRETTY_PRINT);
    }
}
