<?php namespace juniorb2ss\LaravelEmailLogger\Contracts;

/**
 *
 */
interface Factory {
	/**
	 * Create a new manager instance.
	 *
	 * @param  \Illuminate\Foundation\Application  $app
	 * @return void
	 */
	public function __construct($app);
}
