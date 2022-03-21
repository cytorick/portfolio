<?php

use App\Utilities\Currency;
use App\Utilities\Percentage;

/**
 * Return the application name.
 *
 * @return String
 */
if (!function_exists('appName'))
{
	function appName ()
	{
		return config('app.name');
	}
}


if (!function_exists('setMessage'))
{
	/**
	 * Set flash message.
	 * @param String $text Message text.
	 * @param String $class UIkit class representing the status.
	 * @return void.
	 */
	function setMessage ($text, $class = 'uk-alert-success')
	{
		Session::flash('message_text', $text);
		Session::flash('message_class', $class);
	}
}

if (!function_exists('getMessage'))
{
	/**
	 * Get flash message.
	 * @return string.
	 */
	function getMessage ()
	{
		return '<div class="' . Session::get('message_class') . ' uk-text-center uk-text-large uk-margin" uk-alert>' . Session::get('message_text') . '</div>';
	}
}

if (!function_exists('hasMessage'))
{
	/**
	 * Check if flash message exists.
	 * @return boolean.
	 */
	function hasMessage ()
	{
		return Session::has('message_text');
	}
}

/**
 * Convert the given amount into a presentable currency amount.
 * @param Float | Decimal $value
 * @return String
 */
if (!function_exists('euros'))
{
	function euros ($value, $symbol = 'EUR', $decimals = false)
	{
		return Currency::format($value, $symbol, $decimals);
	}
}


if (!function_exists('c2e'))
{
	/**
	 * Convert cents to euro's.
	 * @param Integer $value Amount in cents.
	 * @return String
	 */
	function c2e ($value, $symbol = true, $decimals = true)
	{
		$currencySign = $symbol ? '€ ' : null;
		return $currencySign . number_format($value / 100, ($decimals ? 2 : 0), ',', '');
	}
}