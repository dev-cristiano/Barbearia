<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;


/**
 * @method static string document(string $value)
 * @method static string phone(string $value)
 * @method static string cep(string $value)
 * @method static string money(float|string $value)
 * @method static string date(string $value)
 *
 * @see \App\Helpers\FormatHelper
 */

class Format extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'format';
    }
}
