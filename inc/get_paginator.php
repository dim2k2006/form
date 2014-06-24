<?php
/**
*Выводит пагинатор
*@param int $pageNum
*@return string
*/
function get_paginator ($pageNum) {
	isset($_GET['page']) ? $page = $_GET['page'] : $page = 1;
	isset($_GET['size']) ? $pageSize = $_GET['size'] : $pageSize = 15;
	switch ($pageSize) {
		case 15:
			$active15 = 'class="activeNum"';
			break;
		case 30:
			$active30 = 'class="activeNum"';
			break;
		case 45:
			$active45 = 'class="activeNum"';
			break;
	}
	$html = "";
	
	for ($i=1; $i <= $pageNum; $i++) { 
		$html .= ($i == $page) ? "<a class='pItem active' href=\"?page=$i&size=$pageSize#text\">$i</a>" : "<a class='pItem' href=\"?page=$i&size=$pageSize#text\">$i</a>";
	}
	$html .= "<span>Кол-во записей:<a $active15 href=\"?page=$page&size=15#text\">15</a><a $active30 href=\"?page=$page&size=30#text\">30</a><a $active45 href=\"?page=$page&size=45#text\">45</a></span>";
	
	return $html;
}