<?php

namespace GlobalPay\Module\Api;


interface PaymentNotificationInterface
{
    /**
     * Listener for GlobalPay Redeban webhook
     *
     * @return \Magento\Framework\App\ResponseInterface
     * @api
     *
     */
    public function notificate();
}
