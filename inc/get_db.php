<?php
/**
*Получает базу данных и сохранает её в массив
*@return array
*/
function get_db () {
	return file('data/db.txt');
}