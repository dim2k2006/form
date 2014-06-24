<?php
/**
*Находит количество страниц
*@param array $db
*@param CONSTANT $pageSize
*@return int
*/
function get_page_num ($db, $pageSizeContent) {
	$dbSize = count($db);
	$pageNum = $dbSize/$pageSizeContent;
	return ((int)$pageNum == $pageNum) ? $pageNum : (int)ceil($pageNum);
}