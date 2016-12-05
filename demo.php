<?php

/*
* Test File
* 
* @package KnowTheCode
* @since 1.0.0
* @author Anthony Skelton
* @link http://anthonyskelton.com
* @license GPU 2.0+
 */
namespace KnowTheCode;

function operand( $value, $message ) {
	$boolean = $value == 1 ? 'true' : 'false';

	echo "{$message}: $boolean<br>";

	return $value;
}

if ( operand( false, 'left' ) and operand( true, 'middle' ) && operand( true, 'right' )) {

	echo "============ yes it's true ============";

} else {

	echo "============ false =============";
}