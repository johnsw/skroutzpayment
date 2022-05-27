<?php


namespace Stonewave\SkroutzPayment\Model\Payment;

class SkroutzPayment extends \Magento\Payment\Model\Method\AbstractMethod
{
    protected $_code = "skroutz_payment";
    protected $_isOffline = true;

    /**
     * Check if everypay is available.
     *
     * @param \Magento\Quote\Api\Data\CartInterface|null $quote
     * @return bool
     */
    public function isAvailable(
        \Magento\Quote\Api\Data\CartInterface $quote = null
    ) {
        return parent::isAvailable($quote);
    }
}
