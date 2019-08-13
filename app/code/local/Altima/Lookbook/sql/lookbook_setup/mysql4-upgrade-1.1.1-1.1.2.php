<?php

$adminVersion = Mage::getConfig()->getModuleConfig('Mage_Admin')->version;
if (version_compare($adminVersion, '1.6.1.2', '>=')) {
    $whitelistBlock = Mage::getModel('admin/block')->load('lookbook/lookbook', 'block_name');
    $whitelistBlock->setData('block_name', 'lookbook/lookbook');
    $whitelistBlock->setData('is_allowed', 1);
    $whitelistBlock->save();
}
