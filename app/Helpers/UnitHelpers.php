<?php

use App\Utilities\Currency;
use App\Utilities\Percentage;

/**
 * Convert the given amount into a presentable currency amount.
 * @param Float | Decimal $value
 * @return String
 */
if (!function_exists('currency'))
{
	function currency ($value, $currency = false, $decimals = false)
	{
		return Currency::format($value, $currency, $decimals);
	}
}

/**
 * Convert the given amount into a presentable percentage amount.
 * @param Float | Decimal $value
 * @return String
 */
if (!function_exists('percentage'))
{
	function percentage ($value, $symbol = false, $decimals = false)
	{
		return Percentage::format($value, $symbol, $decimals);
	}
}