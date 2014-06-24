<?php
/**
*Проверяет текущую страницу на наличие превышения количества страниц над текущей страницей
*@param int
*/
function page_num_checker ($pageNum) {
	if (isset($_GET['page'])) $page = $_GET['page'];
	if (isset($_GET['size'])) $size = $_GET['size'];
	if ($pageNum < $page) {
		echo "<meta http-equiv='refresh' content='0;?page=$pageNum&size=$size#text'>";
	}
}