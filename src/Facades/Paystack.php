<?php

namespace Unicodeveloper\Paystack\Facades;

use Illuminate\Support\Facades\Facade;

class Paystack extends Facade {
    /**
   * Get the registered name of the component.
   *
   * @return string
   */
    protected static function getFacadeAccessor()
    {
        return 'laravel-paystack';
    }
}