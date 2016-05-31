<?php
// Copyright 1999-2016. Parallels IP Holdings GmbH.
class Modules_ProductInfo_Product
{
    public function getInfo()
    {
        return [
            'Platform' => pm_ProductInfo::getPlatform(),
            'Product version' => pm_ProductInfo::getVersion(),
            'OS name' => pm_ProductInfo::getOsName(),
            'OS version' => pm_ProductInfo::getOsVersion(),
            'Arch' => pm_ProductInfo::getOsArch(),
            'Virtualization' => pm_ProductInfo::getVirtualization(),
        ];
    }
}
