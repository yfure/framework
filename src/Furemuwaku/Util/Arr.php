<?php

namespace Yume\Fure\Util;

use ArrayAccess;

use Yume\Fure\Error;
use Yume\Fure\Support;

/*
 * Arr<Array>
 *
 * @package Yume\Fure\Util
 */
abstract class Arr
{
	
	/*
	 * Retrieve element values using dot as array separator.
	 *
	 * @access Public Static
	 *
	 * @params Array|String $refs
	 * @params Array|ArrayAccess $data
	 *
	 * @return Mixed
	 */
	public static function ify( Array | String $refs, Array | ArrayAccess $data ): Mixed
	{
		// If `refs` is string type.
		if( is_string( $refs ) )
		{
			// Split string reference.
			$refs = self::ifySplit( $refs );
		}
		
		// If `refs` length is zero or empty value.
		if( count( $refs ) === 0 )
		{
			return( $data );
		}
		
		foreach( $refs As $index )
		{
			// Checks if the character contains only numbers.
			if( Number::valid( $index ) )
			{
				// Parse string to int.
				$index = ( Int ) $index;
			}
			else {
				
				// Decode Hexadecimal strings.
				$index = Support\RegExp\RegExp::replace( "/^(?:hx_(.*?))$/", $index, fn( $m ) => hex2bin( $m[1] ) );
			}
			
			// Check if stack variable is exists.
			if( isset( $stack ) )
			{
				// If key or index is exists.
				if( isset( $stack[$index] ) )
				{
					$stack = $stack[$index];
				}
				else {
					throw is_string( $index ) ? new Error\KeyError( $index, Error\KeyError::NAME_ERROR ) : new Error\IndexError( $index, Error\IndexError::RANGE_ERROR );
				}
			} else {
				
				// If key or index is exists.
				if( isset( $data[$index] ) )
				{
					$stack = $data[$index];
				}
				else {
					throw is_string( $index ) ? new Error\KeyError( $index, Error\KeyError::NAME_ERROR ) : new Error\IndexError( $index, Error\IndexError::RANGE_ERROR );
				}
			}
		}
		return( $stack ?? $data );
	}
	
	/*
	 * Join array elements with a period.
	 *
	 * @access Public Static
	 *
	 * @params Array $split
	 *
	 * @return String
	 */
	public static function ifyJoin( Array $split ): String
	{
		return( implode( ".", self::map( $split, fn( $i, $k, $refer ) => Support\RegExp\RegExp::replace( "/^(?:hx_(.*?))$/", $refer, fn( $m ) => hex2bin( $m[1] ) ) ) ) );
	}
	
	/*
	 * Split string with period.
	 *
	 * @access Public Static
	 *
	 * @params String $refer
	 *
	 * @return Array
	 */
	public static function ifySplit( String $refer ): Array
	{
		return( explode( ".", Support\RegExp\RegExp::replace( "/(?:\[([^\]]*)\])/", $refer, fn( $m ) => f( ".hx_{}", bin2hex( $m[1] ) ) ) ) );
	}
	
	/*
	 * Array map.
	 *
	 * @access Public Static
	 *
	 * @params Array|String|Yume\Fure\Support\Data\DataInterface $array
	 * @params Callable $callback
	 *
	 * @return Array|Yume\Fure\Support\Data\DataInterface
	 */
	public static function map( Array | String | Support\Data\DataInterface $array, Callable $callback ): Array | Support\Data\DataInterface
	{
		switch( True )
		{
			// If `array` is DataInterface.
			case $array Instanceof Support\Data\DataInterface: return( $array )->map( $callback );
			
			// If `array` is String type.
			case is_string( $array ): $array = str_split( $array ); break;
		}
		
		// Data Stack.
		$stack = [];
		
		// Get array keys.
		$indexs = array_keys( $array );
		
		// Mapping array.
		for( $i = 0; $i < count( $array ); $i++ )
		{
			// Get callback return value.
			$stack[$indexs[$i]] = call_user_func(
				
				// Callback handler.
				$callback,
				
				// Index iteration.
				$i,
				
				// Array key name.
				$indexs[$i],
				
				// Array value.
				$array[$indexs[$i]]
			);
		}
		return( $stack );
	}
	
	/*
	 * Push array element any position.
	 *
	 * @access Public Static
	 *
	 * @params Array[Int|String:Int|String]|Int|String $position
	 * @params Array $array
	 * @params Mixed $replace
	 *
	 * @return Array
	 */
	public static function push( Array | Int | String $position, Array $array, Mixed $replace ): Array
	{
		// Get array length.
		$length = count( $array );
		
		// If the array is empty with no contents.
		if( $length === 0 )
		{
			$array[] = $replace;
		}
		
		// If array length is smaller than position.
		else if( is_int( $position ) && $length -1 <= $position )
		{
			$array[] = $replace;
		}
		
		// If position string then this will overwrite the existing value.
		else if( is_string( $position ) )
		{
			$array[$position] = $replace;
		}
		else {
			
			// Looping iteration start.
			$i = 0;
			
			// Stack values.
			$stack = [];
			
			// To avoid stacking values, unset the array if it exists.
			if( is_array( $position ) )
			{
				unset( $array[$position[1]] );
			}
			
			// Mapping array.
			foreach( $array As $index => $value )
			{
				$i++;
				
				// If position is equal index iteration.
				if( is_int( $position ) && $i -1 === $position || is_array( $position ) && $i -1 === $position[0] )
				{
					// Set array element by position.
					$stack[( is_int( $position ) ? $i -1 : $position[1] )] = $replace;
					
					// Add next queue.
					foreach( $array As $k => $v )
					{
						$stack[( is_int( $k ) ? $k + 1 : $k )] = $v;
					}
					break;
				}
				
				// If position is more than number of array.
				else if( is_int( $position ) && $length < $position + 1 || is_array( $position ) && $length < $position[0] + 1 )
				{
					// Set array element by position.
					$stack[( is_int( $position ) ? $i -1 : $position[1] )] = $replace;
					
					// Add next queue.
					foreach( $array As $k => $v )
					{
						$stack[( is_int( $k ) ? $k + 1 : $k )] = $v;
					}
					break;
				}
				else {
					$stack[$index] = $value;
				}
				unset( $array[$index] );
			}
			return( $stack );
		}
		return( $array );
	}
	
	/*
	 * Unset multiple array elements based on array values.
	 *
	 * @access Public Static
	 *
	 * @params Array|ArrayAccess $array
	 * @params Mixed $values
	 *
	 * @return Array|ArrayAccess
	 */
	public static function unset( Array | ArrayAccess $array, Mixed $values ): Array | ArrayAccess
	{
		// If `values` is not array type.
		if( is_array( $values ) === False && $values Instanceof ArrayAccess === False )
		{
			$values = [ $values ];
		}
		
		// Mapping array values.
		self::map( $values, function( $i, $index, $value ) use( &$array )
		{
			// Mapping array data.
			self::map( $array, function( $i, $index, $target ) use( &$array, $value )
			{
				// If array value is equal target.
				if( $value === $target )
				{
					unset( $array[$index] );
				}
			});
		});
		
		return( $array );
	}
	
}

?>