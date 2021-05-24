<?php

namespace Resursbank\RBEcomPHP;

/**
 * Class RESURS_PAYMENT_STATUS_RETURNCODES
 * @package Resursbank\RBEcomPHP
 * @deprecated Do not query this. Use Resursbank\Ecommerce\PaymentStatus or Resursbank\Ecommerce\OrderStatus.
 */
class RESURS_PAYMENT_STATUS_RETURNCODES
{
    const PENDING = 1;
    const PROCESSING = 2;
    const COMPLETED = 4;
    const ANNULLED = 8;
    const CREDITED = 16;
    const AUTO_DEBITED = 32;
    const MANUAL_INSPECTION = 64;
    const ERROR = 128;
}