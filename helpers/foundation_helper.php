<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Foundation Helper for CodeIgniter.
 *
 * See http://foundation.zurb.com/ for more information about Foundation.
 *
 * @package		helpers
 * @author		Jan Lindblom <jan@powcorp.se>
 * @copyright	Copyright (c) 2012, POW! Corp.
 * @license		MIT
 */

/**
 * Return a Foundation label span element.
 * 
 * @see http://foundation.zurb.com/docs/elements.php
 * @param string $data content of the label.
 * @param string $class type of label, any combination of [round, radius] and
 *        [secondary, alert, success].
 * @return string a string with the generated HTML.
 */
if ( ! function_exists('label')) {
	function label($data = '', $class = '') {
		$class = ($class != '') ? $class.' ' : $class;
		return "<span class=\"".$class."label\">".$data."</span>";
	}
}

/**
 * Return a Foundation tooltip span element.
 *
 * @param string $text the text that's going to have a tooltip.
 * @param string $tooltip the message of the tooltip.
 * @param string $class any combination of 'tip-top', 'tip-left', 'tip-right',
 *        'tip-bottom' and 'noradius'.
 * @param int $datawidth defines the width of the tooltip.
 */
if ( ! function_exists('tooltip')) {
	function tooltip($tooltip = '', $class = '', $text = '', $datawidth = null) {
		$class = ($class != '') ? $class.' ' : $class;
		$datawidth = ($datawidth != null) ? " data-width=".$datawidth.' ' : $datawidth;
		return "<span class=\"".$class."has-tip\" title=\"".$tooltip."\"".$datawidth.">".$text."</span>";
	}
}

?>