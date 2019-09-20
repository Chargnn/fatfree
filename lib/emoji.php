<?php

/*

	Copyright (c) 2009-2017 F3::Factory/Bong Cosca, All rights reserved.

	This file is part of the Fat-Free Framework (http://fatfreeframework.com).

	This is free software: you can redistribute it and/or modify it under the
	terms of the GNU General Public License as published by the Free Software
	Foundation, either version 3 of the License, or later.

	Fat-Free Framework is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
	General Public License for more details.

	You should have received a copy of the GNU General Public License along
	with Fat-Free Framework.  If not, see <http://www.gnu.org/licenses/>.

*/

//! Unicode string manager
class Emoji extends Prefab {
	
	/**
	*	Convert code points to Unicode symbols
	*	@return string
	*	@param $str string
	**/
	function translate($str) {
		return html_entity_decode(preg_replace('/\\\\u([[:xdigit:]]+)/i','&#x\1;',$str));
	}

	/**
	*	Translate emoji tokens to Unicode font-supported symbols
	*	@return string
	*	@param $str string
	**/
	function emojify($str) {
		$map=[
			':('=>'\u2639', // frown
			':)'=>'\u263a', // smile
			'<3'=>'\u2665', // heart
			':D'=>'\u1f603', // grin
			'XD'=>'\u1f606', // laugh
			';)'=>'\u1f609', // wink
			':P'=>'\u1f60b', // tongue
			':,'=>'\u1f60f', // think
			':/'=>'\u1f623', // skeptic
			'8O'=>'\u1f632', // oops
		] + Base::instance()->EMOJI;
		return $this->translate(str_replace(array_keys($map), array_values($map), $str));
	}

}
