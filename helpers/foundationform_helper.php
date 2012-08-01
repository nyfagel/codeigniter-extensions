<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Foundation Form Helper for CodeIgniter.
 *
 * See http://foundation.zurb.com/ for more information about Foundation.
 *
 * @package     helpers
 * @author      Jan Lindblom <jan@powcorp.se>
 * @copyright   Copyright (c) 2012, POW! Corp.
 * @license     MIT
 * @version     0.1
 */

if ( ! function_exists('fform_submit')) {
	function fform_submit($data = '', $value = '', $extra = '') {
		$defaults = array('type' => 'submit', 'name' => (( ! is_array($data)) ? $data : ''), 'value' => $value);
		if (!function_exists('_parse_form_attributes')) {
			return "The Foundation Form Helper requires the Form Helper, please load that first!";
		}
		return "<input "._parse_form_attributes($data, $defaults).$extra." />";
	}
}


?>