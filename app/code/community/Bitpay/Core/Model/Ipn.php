<?php
/**
 * @license Copyright 2011-2014 BitPay Inc., MIT License
 * @see https://github.com/bitpay/magento-plugin/blob/master/LICENSE
 */

/**
 */
class Bitpay_Core_Model_Ipn extends Mage_Core_Model_Abstract
{
    /**
     */
    protected function _construct()
    {
        $this->_init('bitpay/ipn');
    }
}
