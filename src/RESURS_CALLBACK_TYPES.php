<?php

namespace Resursbank\RBEcomPHP;

/**
 * Class RESURS_CALLBACK_TYPES
 * @package Resursbank\RBEcomPHP
 * @deprecated Do not query this. Use Resursbank\Ecommerce\Callback.
 */
class RESURS_CALLBACK_TYPES
{
    const NOT_SET = 0;
    const UNFREEZE = 1;
    const ANNULMENT = 2;
    const AUTOMATIC_FRAUD_CONTROL = 4;
    const FINALIZATION = 8;
    const TEST = 16;
    const UPDATE = 32;
    const BOOKED = 64;
}