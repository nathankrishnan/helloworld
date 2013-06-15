<?php

class Functions{

	public static function strDelete($aString, $BeginPos, $Length){

		$r = '';
		$l = strlen($aString);
		$EndPos = $BeginPos + $Length;
		
		for ($i = 0; $i < $l; $i++)
			if (($i < $BeginPos) || ($i >= ($EndPos)))
				$r .= $aString[$i];
		
		return $r;
	}

}

?>