<?php
	header('Expires: Mon, 26 Jul 1997 05:00:00 GMT'); 
	header('Last-Modified: ' . gmdate( 'D, d M Y H:i:s' ) . 'GMT'); 
	header('Cache-Control: no-cache, must-revalidate'); 
	header('Pragma: no-cache');
	header('Content-type: application/json');
	
	$req = empty($_REQUEST['pattern'])? '' : $_REQUEST['pattern'];
	
	switch($req ){
		case 'blinker':
			$res = [
			'0000000000',
			'0000000000', 
			'0000000000',
			'0000000000',
		    '0000100000',
			'0000100000',
			'0000100000',
	        '0000000000',
			'0000000000', 
            '0000000000'];
		break;
		case 'toad':
			$res = [
			'0000000000',
			'0000000000', 
			'0000000000',
			'0000000000',
		    '0000111000',
			'0001110000',
			'0000000000',
	        '0000000000',
			'0000000000', 
            '0000000000'];
		break;
		case 'beacon':
			$res = [
			'0000000000',
			'0000000000', 
			'0000000000',
			'0001100000',
		    '0001100000',
			'0000011000',
			'0000011000',
	        '0000000000',
			'0000000000', 
            '0000000000'];
		break;
		case 'pulsar':
			$res = [
			'00000000000000000',
			'00001110001110000', 
			'00000000000000000',
			'00100001010000100',
		    '00100001010000100',
			'00100001010000100',
			'00001110001110000',
	        '00000000000000000',
			'00001110001110000', 
            '00100001010000100', 
            '00100001010000100', 
            '00100001010000100', 
            '00000000000000000', 
            '00001110001110000', 
            '00000000000000000'];
		break;
		default:
			$res = [];
		break;
	}
die(json_encode($res));