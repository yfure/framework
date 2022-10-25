<?php

namespace Yume\Fure\Support\Reflect;

/*
 * ReflectFunction
 *
 * @package Yume\Fure\Support\Reflect
 */
abstract class ReflectFunction
{
	
	/*
	 * Returns a dynamically created closure for the function.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getClosure( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Returns a dynamically created closure for the function.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function invoke( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Returns a dynamically created closure for the function.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function isAnonymous( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Returns a dynamically created closure for the function.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function isDisabled( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	
	/*
	 * Gets Attributes.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getAttributes( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Returns the scope associated to the closure.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getClosureScopeClass( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Returns this pointer bound to closure.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getClosureThis( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Returns an array of the used variables in the Closure.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getClosureUsedVariables( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Gets doc comment.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getDocComment( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Gets end line number.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getEndLine( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Gets extension info.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getExtension( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Gets extension name.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getExtensionName( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Gets file name.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getFileName( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Gets function name.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getName( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Gets namespace name.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getNamespaceName( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Gets number of parameters.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getNumberOfParameters( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Gets number of required parameters.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getNumberOfRequiredParameters( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Gets parameters.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getParameters( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Gets the specified return type of a function.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getReturnType( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Gets function short name.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getShortName( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Gets starting line number.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getStartLine( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Gets static variables.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getStaticVariables( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Returns the tentative return type associated with the function.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function getTentativeReturnType( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Checks if the function has a specified return type.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function hasReturnType( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Returns whether the function has a tentative return type.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function hasTentativeReturnType( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Checks if function in namespace.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function inNamespace( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Checks if closure.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function isClosure( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Checks if deprecated.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function isDeprecated( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Returns whether this function is a generator.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function isGenerator( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Checks if is internal.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function isInternal( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Checks if user defined.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function isUserDefined( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Checks if the function is variadic.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function isVariadic( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
	/*
	 * Checks if returns reference.
	 *
	 * @access Public Static
	 *
	 * @params  $
	 * @params Mixed $reflect
	 *
	 * @return 
	 */
	public static function returnsReference( Mixed &$reflect = Null ): 
	{
		// ...
	}
	
}

?>