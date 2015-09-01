<?php


/**
 * UtilInk.trait.php
 *
 * UtilInk.trait.php is a extension for utilphp
 * 
 *
 * @author Thinkink.es <thinkink@thinkink.es>
 * @link   https://github.com/thinkink/utilphp Official Documentation
 *
 * @author Brandon Wamboldt <brandon.wamboldt@gmail.com>
 * @link   http://github.com/brandonwamboldt/utilphp/ Official Documentation

 */
 
 
trait UtilInk{

	/**
	 *  Find de deep of array - under dev
	 *  @param  array  $array     de Array to find deep
	 */
	public function array_depth($array) {
		$max_indentation = 1;

		$array_str = print_r($array, true);
		$lines = explode("\n", $array_str);

		foreach ($lines as $line) {
			$indentation = (strlen($line) - strlen(ltrim($line))) / 4;

			if ($indentation > $max_indentation) {
				$max_indentation = $indentation;
			}
		}

		return ceil(($max_indentation - 1) / 2) + 1;
	}
	
}

?>
