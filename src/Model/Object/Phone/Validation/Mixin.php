<?php

declare(strict_types=1);

namespace Flux\OdooApiClient\Model\Object\Phone\Validation;

use Flux\OdooApiClient\Model\Object\Base;

/**
 * Odoo model : phone.validation.mixin
 * ---
 * Name : phone.validation.mixin
 * ---
 * Info :
 * The base model, which is implicitly inherited by all models.
 */
abstract class Mixin extends Base
{
    /**
     * @return string
     */
    public static function getOdooModelName(): string
    {
        return 'phone.validation.mixin';
    }
}
