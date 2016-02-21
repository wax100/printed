id: 30
source: 3
name: getTVlist
properties: 'a:0:{}'

-----

// Получаем или готовый текст, или достаем указанный ТВ у ресурса
$tv = !empty($input) ? trim($input) : trim($modx->resource->getTVValue($tv));
if (empty($tv)) {return '';}

// Стандартные чанки, можно переопределить
if (empty($tpl)) {$tpl = '@INLINE <li>[[+value]]</li>';}
if (empty($tplOuter)) {$tplOuter = '@INLINE <ul>[[+rows]]</ul>';}

// Подключаем pdoTools для работы с инлайновыми чанками
$pdo = $modx->getService('pdoTools');

// Разбиваем текст по символу переноса строки
$rows = '';
$tmp = array_map('trim', explode("\n", $tv));
$idx=0;
foreach ($tmp as $value) {
	if (empty($value)) {continue;}
	$idx++;
	$rows .= $pdo->getChunk($tpl, array('value' => $value, 'idx' => $idx));
}

// Если есть, что выводить - выводим
if (!empty($rows)) {
	return $pdo->getChunk($tplOuter, array('rows' => $rows));
}