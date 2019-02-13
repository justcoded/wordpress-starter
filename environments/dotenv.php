<?php

if ( ! function_exists( 'dotenv' ) ) {
	/**
	 * Wrapper for Dotenv class object to cache it to static variable.
	 *
	 * @param string|null $config
	 *
	 * @return \Dotenv\Dotenv
	 * @throws Exception
	 */
	function dotenv( $config = null ) {
		static $dotenv;

		if ( ! is_null( $config ) ) {
			$dotenv = Dotenv\Dotenv::create( $config );
		}

		if ( ! $dotenv ) {
			throw new \Exception( "dotenv() helper is not initialized. Call dotenv('path to .env') first." );
		}

		return $dotenv;
	}
}

if ( ! function_exists( 'env' ) ) {
	/**
	 * Gets the value of an environment variable. Supports boolean, empty and null.
	 *
	 * @param  string $key
	 * @param  mixed  $default
	 *
	 * @return mixed
	 */
	function env( $key, $default = null ) {
		$value = getenv( $key );
		if ( false === $value ) {
			return $default;
		}
		switch ( strtolower( $value ) ) {
			case 'true':
			case '(true)':
				return true;
			case 'false':
			case '(false)':
				return false;
			case 'null':
			case '(null)':
				return null;
			case 'empty':
			case '(empty)':
				return '';
		}
		// remove double quotes from value, if wrapped.
		if ( 0 === strpos( $value, '"' )
		     && '"' === substr( $value, - 1 )
		) {
			return substr( $value, 1, - 1 );
		}

		return $value;
	}
}