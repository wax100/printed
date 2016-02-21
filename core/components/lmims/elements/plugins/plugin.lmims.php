<?php
switch ($modx->event->name) {
	case 'OnWebPagePrerender':
		$resource	= &$modx->resource;
		$html		= &$resource->_output;
		$hash 		= sha1($html);
		$date		= time();


		$protocol	= (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
		$domain		= $_SERVER['HTTP_HOST'];
		$uri		= $_SERVER['REQUEST_URI'];
		$url		= $protocol.$domain.$uri;

		$key		= md5($resource->id.$url);
		$lmimsRow	= $modx->getObject('modLMIMS', array('key' => $key));
		// lmimsRow not exists
		if ( !($lmimsRow instanceof modLMIMS) ) {
			// create new
			$lmimsRow	= $modx->newObject('modLMIMS');
			$lmimsDate	= $date;
			$lmimsHash	= $hash;
			$lmimsRow->fromArray(array(
				'key'	=> $key,
				'date'	=> $lmimsDate,
				'hash'	=> $lmimsHash,
				'resource' => $resource->id,
			), '', true);
			$lmimsRow->save();
		}
		// get last modified data
		else {
			$lmimsDate	= $lmimsRow->date;
			$lmimsHash	= $lmimsRow->hash;
		}

		// if current document hash not equal hash from lmimsRow
		if ($hash !== $lmimsHash) {
			$lmimsRow->fromArray(array(
				'key'	=> $key,
				'date'	=> $date,
				'hash'	=> $hash
			), '', true);
			$lmimsRow->save();
			$lmimsDate	= $date;
			$lmimsHash	= $hash;
		}

		/**
		 * http://last-modified.com/ru/last-modified-if-modified-since-php.html
		 */
		$LastModified		= gmdate("D, d M Y H:i:s \G\M\T", $lmimsDate);
		$IfModifiedSince	= false;
		if (isset($_ENV['HTTP_IF_MODIFIED_SINCE'])) {
			$IfModifiedSince = strtotime(substr($_ENV['HTTP_IF_MODIFIED_SINCE'], 5));
		}
		if (isset($_SERVER['HTTP_IF_MODIFIED_SINCE'])) {
			$IfModifiedSince = strtotime(substr($_SERVER['HTTP_IF_MODIFIED_SINCE'], 5));
		}
		if ($IfModifiedSince && $IfModifiedSince >= $lmimsDate) {
			header($_SERVER['SERVER_PROTOCOL'] . ' 304 Not Modified');
			exit;
		}
		header('Last-Modified: '. $LastModified);

		break;

	case 'OnDocFormSave':
		if (!$modx->getOption('lmims_refresh_lmims_data_about_page_on_save')) return;
		
		$protocol	= (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https" : "http";
		$url		= $modx->makeUrl($resource->id, '', '', $protocol);

		if (function_exists('curl_init')) {
			$curl = curl_init($url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($curl, CURLOPT_HEADER, true);
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curl, CURLOPT_AUTOREFERER, true);
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_TIMEOUT, 10);
			curl_exec($curl);
			curl_close($curl);
		} else {
			file_get_contents($url);
		}

		break;

	case 'OnBeforeEmptyTrash':
		$deletedids = $modx->event->params['ids'];
		if (!empty($deletedids)) {
			$modx->removeCollection('modLMIMS', array(
				'resource:IN' => $deletedids,
			));
		}
		break;

	default:
		break;
}