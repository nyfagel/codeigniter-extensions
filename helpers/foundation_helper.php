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
 * @version		0.3
 */


if ( ! function_exists('label')) {
	/**
	 * Create a Foundation label span element.
	 * 
	 * @see http://foundation.zurb.com/docs/elements.php
	 * @param string $data content of the label.
	 * @param string $class type of label, any combination of [round, radius] and
	 *        [secondary, alert, success].
	 * @return string a string with the generated HTML.
	 */
	function label($data = '', $class = '') {
		$class = ($class != '') ? $class.' ' : $class;
		return "<span class=\"".$class."label\">".$data."</span>";
	}
}


if ( ! function_exists('button_anchor')) {
	/**
	* Create a Foundation button a element.
	 * 
	 * @see http://foundation.zurb.com/docs/buttons.php
	 * @param string $data text of the button.
	 * @param string $href the href of the anchor.
	 * @param string $class type of button, any combination of [tiny, small, medium, large],
	 *        [radius, round] and [success, alert, secondary].
	 * @return string a string with the generated HTML.
	 */
	function button_anchor($data = '', $href='', $class = '') {
		$class = ($class != '') ? $class.' ' : $class;
		return "<a class=\"".$class."button\" href=\"".$href."\">".$data."</a>";
	}
}

if ( ! function_exists('tooltip')) {
	/**
	 * Create a Foundation tooltip span element.
	 * 
	 * @see http://foundation.zurb.com/docs/elements.php
	 * @param string $text the text that's going to have a tooltip.
	 * @param string $tooltip the message of the tooltip.
	 * @param string $class any combination of 'tip-top', 'tip-left', 'tip-right',
	 *        'tip-bottom' and 'noradius'.
	 * @param int $datawidth defines the width of the tooltip.
	 */
	function tooltip($tooltip = '', $class = '', $text = '', $datawidth = null) {
		$class = ($class != '') ? $class.' ' : $class;
		$datawidth = ($datawidth != null) ? " data-width=".$datawidth.' ' : $datawidth;
		return "<span class=\"".$class."has-tip\" title=\"".$tooltip."\"".$datawidth.">".$text."</span>";
	}
}

if ( ! function_exists('row')) {
	/**
	 Create a Foundation row div element.
	 * 
	 * @see http://foundation.zurb.com/docs/grid.php
	 */
	function row($content = null, $class = '') {
	$class = ($class != '') ? $class.' ' : $class;
		return "<div class=\"".$class."row\">".$content."</div>";
	}
}

if ( ! function_exists('columns')) {
	/**
	 Create a Foundation columns div element.
	 * 
	 * @see http://foundation.zurb.com/docs/grid.php
	 */
	function columns($data = '', $number = 12, $class = '', $mobile = null) {
		$class = ($class != '') ? $class.' ' : $class;
		$number = _number_to_text($number).' ';
		$mobile = ($mobile != null) ? 'mobile-'._number_to_text($mobile).' ' : $mobile;
		return "<div class=\"".$class.$number.$mobile."columns\">".$data."</div>";
	}
}

if ( ! function_exists('_number_to_text')) {
	function _number_to_text($number = 1) {
		$number = ($number ==  1) ? 'one'    : $number;
		$number = ($number ==  2) ? 'two'    : $number;
		$number = ($number ==  3) ? 'three'  : $number;
		$number = ($number ==  4) ? 'four'   : $number;
		$number = ($number ==  5) ? 'five'   : $number;
		$number = ($number ==  6) ? 'six'    : $number;
		$number = ($number ==  7) ? 'seven'  : $number;
		$number = ($number ==  8) ? 'eight'  : $number;
		$number = ($number ==  9) ? 'nine'   : $number;
		$number = ($number == 10) ? 'ten'    : $number;
		$number = ($number == 11) ? 'eleven' : $number;
		$number = ($number == 12) ? 'twelve' : $number;
		return $number;
}

?>