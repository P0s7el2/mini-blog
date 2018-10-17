<?


// во время выполнения скрипта установказаданной конфигурации
ini_set('display_errors', 1);

//задает возможность попадания всех ошибок в отчет
error_reporting(E_ALL);

//попытка вывести форматированные ошибки
function debug($str){
	echo '<pre>';
	var_dump($str);
	echo '</pre>';
	exit;
}