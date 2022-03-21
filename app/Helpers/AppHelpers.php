<?php

use App\Models\Admin;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\ModelNotFoundException;

/**
 * Get a notifiable admin object.
 */
function admin ($name = 'Support')
{
	try
	{
		return Admin::where('name', $name)->firstOrFail();
	}
	catch (ModelNotFoundException $exception)
	{
		return Admin::first();
	}
}

/**
 * Get current user.
 */
function currentUser ()
{
	return Auth::check() ? Auth::user() : false;
}