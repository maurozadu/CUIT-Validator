<?php

class CuitValidator {

	static function isValid($cuit) {
		$digits = array();
		if (strlen($cuit) != 13) return false;
		for ($i = 0; $i < strlen($cuit); $i++) {
			if ($i == 2 or $i == 11) {
				if ($cuit[$i] != '-') return false;
			} else {
				if (!ctype_digit($cuit[$i])) return false;
				if ($i < 12) {
					$digits[] = $cuit[$i];
				}
			}
		}
		$acum = 0;
		foreach (array(5, 4, 3, 2, 7, 6, 5, 4, 3, 2) as $i => $multiplicador) {
			$acum += $digits[$i] * $multiplicador;
		}
		$cmp = 11 - ($acum % 11);
		if ($cmp == 11) $cmp = 0;
		if ($cmp == 10) $cmp = 9;
		return ($cuit[12] == $cmp);
	}


}