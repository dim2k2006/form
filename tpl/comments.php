<?php
	//получаем базу данных
	$db = get_db ();

	//получаем кол-во страниц
	$pageNum = get_page_num ($db, $pageSizeContent);

	//проверяем текущую страницу
	page_num_checker ($pageNum);

	//выводим содержимое текущей страницы
	$content = page_get_content ($db, $pageSizeContent);
	$html .= "<a id='text'></a><ul>$content</ul>";
?>