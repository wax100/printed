<?php
function send_sms($phones, $message, $sender){
	$m = _smsc_send_cmd("send", "cost=3&phones=".urlencode($phones)."&mes=".urlencode($message).($sender === false ? "" : "&sender=".urlencode($sender)));
	return $m;
}
function _smsc_send_cmd($cmd, $arg = ""){
	$url = (SMSC_HTTPS ? "https" : "http")."://smsc.ru/sys/$cmd.php?login=".urlencode(SMSC_LOGIN)."&psw=".urlencode(SMSC_PASSWORD)."&fmt=1&charset=".SMSC_CHARSET."&".$arg;

	$i = 0;
	do {
		if ($i) {
			sleep(2);

			if ($i == 2)
				$url = str_replace('://smsc.ru/', '://www2.smsc.ru/', $url);
		}

		$ret = _smsc_read_url($url);
	}
	while ($ret == "" && ++$i < 3);

	if ($ret == "") {
		if (SMSC_DEBUG)
			echo "Ошибка чтения адреса: $url\n";

		$ret = ","; // фиктивный ответ
	}
	return explode(",", $ret);
}
function _smsc_read_url($url){
	$ret = "";
	$post = SMSC_POST || strlen($url) > 2000;

	if (function_exists("curl_init"))
	{
		static $c = 0; // keepalive

		if (!$c) {
			$c = curl_init();
			curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($c, CURLOPT_CONNECTTIMEOUT, 10);
			curl_setopt($c, CURLOPT_TIMEOUT, 60);
			curl_setopt($c, CURLOPT_SSL_VERIFYPEER, 0);
		}

		if ($post) {
			list($url, $post) = explode("?", $url, 2);
			curl_setopt($c, CURLOPT_POST, true);
			curl_setopt($c, CURLOPT_POSTFIELDS, $post);
		}

		curl_setopt($c, CURLOPT_URL, $url);

		$ret = curl_exec($c);
	}
	elseif (!SMSC_HTTPS && function_exists("fsockopen"))
	{
		$m = parse_url($url);

		if (!$fp = fsockopen($m["host"], 80, $errno, $errstr, 10))
			$fp = fsockopen("78.129.199.124", 80, $errno, $errstr, 10);

		if ($fp) {
			fwrite($fp, ($post ? "POST $m[path]" : "GET $m[path]?$m[query]")." HTTP/1.1\r\nHost: smsc.ru\r\nUser-Agent: PHP".($post ? "\r\nContent-Type: application/x-www-form-urlencoded\r\nContent-Length: ".strlen($m['query']) : "")."\r\nConnection: Close\r\n\r\n".($post ? $m['query'] : ""));

			while (!feof($fp))
				$ret .= fgets($fp, 1024);
			list(, $ret) = explode("\r\n\r\n", $ret, 2);

			fclose($fp);
		}
	}
	else
		$ret = file_get_contents($url);

	return $ret;
}
