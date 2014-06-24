<?php
	//выводим пагинатор
	$paginator = get_paginator ($pageNum);
	$html .= "<div class='paginator'>$paginator</div>";
?>
