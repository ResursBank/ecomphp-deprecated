<?php

namespace Resursbank\RBEcomPHP;

/**
 * Class RESURS_ENVIRONMENTS
 * Environments in 1.4 and above uses true/false values for whether we're in test or not. This is why we replaced the
 * old values with booleans.
 * @package Resursbank\RBEcomPHP
 * @deprecated Do not query this.
 */
class RESURS_ENVIRONMENTS
{
    const PRODUCTION = false;
    const TEST = true;
}