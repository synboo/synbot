<?php
/*
 *
 * 旧暦APIから六曜を取得する関数
 *
 */

function getRokuyou() {

	// create curl resource
	$ch = curl_init();
	// set url
	curl_setopt($ch, CURLOPT_URL, "api.sekido.info/qreki");
	//return the transfer as a string
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// $output contains the output string
	$xmlstr = curl_exec($ch);
	// close curl resource to free up system resources
	curl_close($ch);  

	// xml parse
	$xml = new SimpleXMLElement($xmlstr);
	$result = $xml->xpath('/qreki/rokuyou');

	switch($result[0]) {
		case '0':
			$rokuyou = "大安";
			break;
		case '1':
			$rokuyou = "赤口";
			break;
		case '2':
			$rokuyou = "先勝";
			break;
		case '3':
			$rokuyou = "友引";
			break;
		case '4':
			$rokuyou = "先負";
			break;
		case '5':
			$rokuyou = "仏滅";
			break;
	}

	return array("rokuyou" => $rokuyou);
}