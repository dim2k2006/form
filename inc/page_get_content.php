<?php
/**
*Выводит содержимое текущей страницы
*@param array $db
*@param CONSTANT $pageSize
*@return string
*/
function page_get_content ($db, $pageSizeContent) {
	isset($_GET['page']) ? $page = $_GET['page'] : $page = 1;
	$db = array_reverse($db);
	$startIndex = ($page - 1)*$pageSizeContent;
	$pageItems = array_slice($db, $startIndex, $pageSizeContent);
	$html = "";
	for ($i=0; $i < count($pageItems) ; $i++) { 
		$tmp = explode(';', $pageItems[$i]);
		$rand = rand(1,7);
		$html .= "<li><div><span>$tmp[0]</span><span class='date'>$tmp[3]</span><span class='avatar'><img src='images/$rand.png' width='60' height='60'></span></div><p>$tmp[2]</p></li>";
	}
	unset($tmp);
	return $html;
}