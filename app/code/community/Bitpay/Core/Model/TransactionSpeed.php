<?php
/**
 * @license Copyright 2011-2014 BitPay Inc., MIT License
 * @see https://github.com/bitpay/magento-plugin/blob/master/LICENSE
 */

class Bitpay_Core_Model_TransactionSpeed
{
    const SPEED_LOW    = 'low';
    const SPEED_MEDIUM = 'medium';
    const SPEED_HIGH   = 'high';

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => self::SPEED_LOW, 'label'    => Mage::helper('bitpay')->__('Low')),
            array('value' => self::SPEED_MEDIUM, 'label' => Mage::helper('bitpay')->__('Medium')),
            array('value' => self::SPEED_HIGH, 'label'   => Mage::helper('bitpay')->__('High')),
        );
    }
}
