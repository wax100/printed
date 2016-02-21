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

$profile = $modx->user->getOne('Profile'); 
$fields = $profile->get('extended');
$phone = $_POST['phone'];

if (isset($_POST['sendSms']) && strlen($phone) == 16){
    
    if ((int)$_SESSION['smstime']>0){
        $now = time();
        $diff = (int)($now - $_SESSION['smstime']);
        if ($diff < 300){
            $modx->setPlaceholder('smsError', 'Сообщение было отправлено менее 5 минут назад! Пожалуйста, подождите.');
            $modx->setPlaceholder('smsSend',1);
            $times = 300 - (int)$diff;
            $modx->setPlaceholder('diff', $times);
            return $modx->getChunk('formSms');
        }
    }
    
    $sql ="SELECT `id` from `modx_user_attributes` WHERE `phone` = '$phone'";
    $result = $modx->query($sql);
    $resultArr = $result->fetchAll(PDO::FETCH_ASSOC);
    $id = (int)$resultArr[0]['id'];
    
    if ($id!=0 && $id!=$modx->user->id){
        $modx->setPlaceholder('smsError', 'Такой телефон уже зарегистрирован!');
        $modx->setPlaceholder('smsSend','');
        return $modx->getChunk('formSms');
    }
    $profile->set('phone', $phone);
    $profile->save();
    define("SMSC_LOGIN", $modx->getOption('crashfix_sms_login'));
    define("SMSC_PASSWORD", $modx->getOption('crashfix_sms_pass'));
    define("SMSC_POST", 0);
    define("SMSC_HTTPS", 0);
    define("SMSC_CHARSET", "utf-8");
    define("SMSC_DEBUG", 1);
    define("SMTP_FROM", $modx->getOption('crashfix_sms_email'));

    $phone=str_replace ('-','',$phone);
    $phone=str_replace ('+','',$phone);
    $msg = rand(1000, 9999);
    $_SESSION['smskod']=$msg;
    $_SESSION['smstime']=time();

    $data = send_sms($phone, 'Kod aktivacii: '.$msg, $modx->getOption('crashfix_sms_from'));
    $modx->setPlaceholder('smsSend',1);
}

if (isset($_POST['sendKod'])) {
    
    $myKod = $_SESSION['smskod'];
    $formKod = $_POST['smsKod'];
    if ($myKod == $formKod) {
        $fields['phoneActive']=1;
        $profile->set('extended', $fields);
        $summ =  $modx->getOption('crashfix_test_summ');
        
    /*$sql="SELECT id,price,amount  FROM `modx_crashfix_tariff` WHERE id=2";
    $result = $modx->query($sql);
    $tariff = $result->fetchAll(PDO::FETCH_ASSOC);

    $price = $tariff[0]['price'];
    $amount = $tariff[0]['amount'];
    $today =  date('d.m.Y 00:00:00');
    $timestamp = strtotime($today);

    $lastDate = $timestamp + floor($summ / $price)*24*3600;// кол-во дней до бана
    */
    //$profile->set('zip', 1); //тариф
    $profile->set('gender', 1);// статус
    $profile->set('fax', $summ); //счет 
    //$profile->set('comment', $amount); // колво заявок 
    //$profile->set('dob', $lastDate); // дата оконч тарифа
    $profile->save();
    $modx->user->set('primary_group',3);
    $modx->user->save();
    }
    else{
        $modx->setPlaceholder('smsError', 'Неправильный код! Проверьте цифры!');
    }
}

$sms = (int)$fields['phoneActive'];

if ($sms){
    return $modx->getChunk('cabinetContent');
}
else{
     return $modx->getChunk('formSms');
}